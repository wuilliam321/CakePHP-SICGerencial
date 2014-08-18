<?php
App::uses('AppController', 'Controller');
/**
 * Asignaciones Controller
 *
 * @property Asignacione $Asignacione
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AsignacionesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		/*$this->loadModel('User');
		$ldap = ldap_connect('192.168.0.2', 389);

		ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);
		ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
		@ldap_bind($ldap, 'userldap@cemerida.net.ve', 'A123456b');
		$attributes = array('givenName','sn','mail','samaccountname','memberof', 'userAccountControl');
		$result = ldap_search($ldap, 'OU=UsuariosActivos,OU=UO_Contraloria,dc=cemerida,dc=net,dc=ve', "(&(samaccountname=*)(userAccountControl=512))", $attributes);
		$entries = ldap_get_entries($ldap, $result);
		$this->User->recursive = 0;
		foreach ($entries as $array) {
			if ($array['samaccountname'][0]) {
				$info['User']['first_name'] = $array['givenname'][0];
				$info['User']['last_name'] = $array['sn'][0];
				$info['User']['username'] = $array['samaccountname'][0];
				$info['User']['cargo'] = 'Sin indicar';
				$info['User']['group_id'] = '99';
				if ($this->User->findByUsername($info['User']['username'])) {
					echo "Ya existe: " . $info['User']['username'] . "<br />";
				} else {
					$this->User->create();
					$this->User->save($info);
					echo "Creando a: " . $info['User']['username'] . "<br />";
				}
			}
		}
		echo "Aqui";die;*/

		$auth_user = $this->Session->read('Auth.User');
		if ($auth_user['group_id'] == 1) {
			$options['conditions'] = array('Asignacione.parent_id' => null, 'Asignacione.completada' => 0);
		} else {
			$options['joins'] = array(
				array(
					'table' => 'asignaciones_users',
					'alias' => 'AsignacionesUser',
					'type' => 'LEFT',
					'conditions' => array(
						'AsignacionesUser.asignacione_id = Asignacione.id',
					)
				)
			);
			$options['conditions'] = array(
				'Asignacione.parent_id' => null,
				'Asignacione.completada' => 0,
				'OR' => array(
					'Asignacione.asignador_id' => $auth_user['id'],
					'Asignacione.responsable_id' => $auth_user['id'],
					'AsignacionesUser.user_id' => $auth_user['id'],
				)
			);
		}
		$asignaciones = $this->Asignacione->find('all', $options);

		$asignacione_ids = array();
		foreach ($asignaciones as &$asignacione) {
			$diff = strtotime($asignacione['Asignacione']['fecha_entrega']) - strtotime($asignacione['Asignacione']['fecha_asignacion']);
			$asignacione['Asignacione']['dias_disponibles'] = floor($diff / (60*60*24));
			if ($asignacione['Asignacione']['dias_disponibles'] < 1) {
				$asignacione['Asignacione']['dias_disponibles'] = 1;
			}

			$diff = strtotime($asignacione['Asignacione']['fecha_entrega']) - strtotime(date('Y-m-d'));
			$asignacione['Asignacione']['dias_transcurridos'] = floor($diff / (60*60*24));

			$asignacione['Asignacione']['progreso'] = 100 - ($asignacione['Asignacione']['dias_transcurridos'] * 100 / $asignacione['Asignacione']['dias_disponibles']);
			if ($asignacione['Asignacione']['progreso'] > 100) {
				$asignacione['Asignacione']['progreso'] = 100;
			}
			if ($asignacione['Asignacione']['progreso'] < 51) {
				$asignacione['Asignacione']['bar_class'] = 'success';
			} else if ($asignacione['Asignacione']['progreso'] > 50 && ($asignacione['Asignacione']['progreso'] < 80)) {
				$asignacione['Asignacione']['bar_class'] = 'warning';
			} else {
				$asignacione['Asignacione']['bar_class'] = 'danger';
			}
			$this->Asignacione->save($asignacione);

			$asignacione['ChildrenAsignacione'] = $this->Asignacione->children($asignacione['Asignacione']['id'], false, null, null, null, 1, 1);
			foreach ($asignacione['ChildrenAsignacione'] as &$child) {
				if ($child['Asignacione']['progreso'] < 51) {
					$child['Asignacione']['bar_class'] = 'danger';
				} else if ($child['Asignacione']['progreso'] > 50 && ($child['Asignacione']['progreso'] < 80)) {
					$child['Asignacione']['bar_class'] = 'warning';
				} else {
					$child['Asignacione']['bar_class'] = 'success';
				}
			}
			$asignacione_ids = array_merge(array($asignacione['Asignacione']['id']), Hash::extract($asignacione['ChildrenAsignacione'], '{n}.Asignacione.id'));
		}
		$options['conditions'] = array(
			'Avance.asignacione_id' => $asignacione_ids
		);
		$avances = $this->Asignacione->Avance->find('all', $options);
		foreach ($avances as &$avance) {
			if ($avance['Avance']['porcentaje_avanzado'] < 51) {
				$avance['Avance']['bar_class'] = 'danger';
			} else if ($avance['Avance']['porcentaje_avanzado'] > 50 && ($avance['Avance']['porcentaje_avanzado'] < 80)) {
				$avance['Avance']['bar_class'] = 'warning';
			} else {
				$avance['Avance']['bar_class'] = 'success';
			}
		}
		$this->set(compact('asignaciones', 'avances'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$auth_user = $this->Session->read('Auth.User');
		if (!$this->Asignacione->exists($id)) {
			throw new NotFoundException(__('Invalid asignacione'));
		}
		$options = array('conditions' => array('Asignacione.' . $this->Asignacione->primaryKey => $id));
		$asignacione = $this->Asignacione->find('first', $options);

		$asignacione['ChildrenAsignacione'] = $this->Asignacione->children($asignacione['Asignacione']['id'], false, null, null, null, 1, 1);
		foreach ($asignacione['ChildrenAsignacione'] as &$child) {
			if ($child['Asignacione']['progreso'] < 51) {
				$child['Asignacione']['bar_class'] = 'danger';
			} else if ($child['Asignacione']['progreso'] > 50 && ($child['Asignacione']['progreso'] < 80)) {
				$child['Asignacione']['bar_class'] = 'warning';
			} else {
				$child['Asignacione']['bar_class'] = 'success';
			}
		}
		$asignacione_ids = array_merge(array($asignacione['Asignacione']['id']), Hash::extract($asignacione['ChildrenAsignacione'], '{n}.Asignacione.id'));
		
		$options['conditions'] = array(
			'Avance.asignacione_id' => $asignacione_ids
		);
		$avances = $this->Asignacione->Avance->find('all', $options);
		foreach ($avances as &$avance) {
			if ($avance['Avance']['porcentaje_avanzado'] < 51) {
				$avance['Avance']['bar_class'] = 'danger';
			} else if ($avance['Avance']['porcentaje_avanzado'] > 50 && ($avance['Avance']['porcentaje_avanzado'] < 80)) {
				$avance['Avance']['bar_class'] = 'warning';
			} else {
				$avance['Avance']['bar_class'] = 'success';
			}
		}
		$this->set(compact('auth_user', 'asignacione', 'avances'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($parent_id = null) {
		$auth_user = $this->Session->read('Auth.User');

		$parent = null;
		$responsable_options['joins'] = array(
			array('table' => 'sistemas_users',
				'alias' => 'SistemasUser',
				'conditions' => array(
					'SistemasUser.user_id = Responsable.id',
					'SistemasUser.sistema_id = ' . Configure::read('sistema')
				)
			)
		);
		$responsable_options['conditions'] = array('Responsable.bloqueado NOT' => 1, 'Responsable.group_id NOT' => 99);

		$user_options['joins'] = array(
			array('table' => 'sistemas_users',
				'alias' => 'SistemasUser',
				'conditions' => array(
					'SistemasUser.user_id = User.id',
					'SistemasUser.sistema_id = ' . Configure::read('sistema')
				)
			)
		);
		$user_options['conditions'] = array('User.bloqueado NOT' => 1, 'User.group_id NOT' => 99);
		if ($parent_id) {
			$this->Asignacione->AsignacionesUser->recursive = -1;
			$colaboradores_ids = $this->Asignacione->AsignacionesUser->findAllByAsignacioneId($parent_id);
			$colaboradores_ids = Hash::extract($colaboradores_ids, "{n}.AsignacionesUser.user_id");

			$this->Asignacione->ParentAsignacione->recursive = -1;
			$parent = $this->Asignacione->ParentAsignacione->findById($parent_id);
			$responsable_options['conditions'] = array_merge($responsable_options['conditions'], array('Responsable.id' => $colaboradores_ids));
			$user_options['conditions'] = array_merge($user_options['conditions'], array('User.id' => $colaboradores_ids));
		}

		if ($this->request->is('post')) {
			$this->Asignacione->create();
			$this->request->data['Asignacione']['asignador_id'] = $auth_user['id'];
			$this->request->data['Asignacione']['parent_id'] = $parent_id;
			// print_r($this->request->data);die;
			if ($this->Asignacione->saveWithAttachments($this->request->data, 'Asignacione')) {
				if ($parent_id) {
					$asignacione = $this->Asignacione->findById($parent_id);
					$asignacione['Asignacione']['porcentaje_distribuido'] += $this->request->data['Asignacione']['porcentaje_asignado'];
					$this->Asignacione->save($asignacione);
				} else {
					$this->increase_contador('A');
				}
				$this->Session->setFlash(__('The asignacione has been saved.'));
				return $this->redirect(array('action' => 'edit', $this->Asignacione->getLastInsertID()));
			} else {
				$this->Session->setFlash(__('The asignacione could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data['Asignacione']['codigo'] = $this->get_last_code('A');
		}
		$this->Asignacione->Responsable->recursive = -1;
		$responsables = $this->Asignacione->Responsable->find('list', $responsable_options);
		$dependencias = $this->Asignacione->Dependencia->find('list');
		$users = $this->Asignacione->User->find('list', $user_options);
		$this->set(compact('responsables', 'parent', 'dependencias', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$auth_user = $this->Session->read('Auth.User');
		if (!$this->Asignacione->exists($id)) {
			throw new NotFoundException(__('Invalid asignacione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Asignacione->saveWithAttachments($this->request->data, 'Asignacione')) {
				$this->Session->setFlash(__('The asignacione has been saved.'));
				return $this->redirect(array('action' => 'edit', $id));
			} else {
				$this->Session->setFlash(__('The asignacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Asignacione.' . $this->Asignacione->primaryKey => $id));
			$this->request->data = $this->Asignacione->find('first', $options);
		}
		$responsable_options['joins'] = array(
			array('table' => 'sistemas_users',
				'alias' => 'SistemasUser',
				'conditions' => array(
					'SistemasUser.user_id = Responsable.id',
					'SistemasUser.sistema_id = ' . Configure::read('sistema')
				)
			)
		);
		$responsable_options['conditions'] = array('Responsable.bloqueado NOT' => 1, 'Responsable.group_id NOT' => 99);

		$user_options['joins'] = array(
			array('table' => 'sistemas_users',
				'alias' => 'SistemasUser',
				'conditions' => array(
					'SistemasUser.user_id = User.id',
					'SistemasUser.sistema_id = ' . Configure::read('sistema')
				)
			)
		);
		$user_options['conditions'] = array('User.bloqueado NOT' => 1, 'User.group_id NOT' => 99);
		$parent['ParentAsignacione'] = $this->request->data['ParentAsignacione'];
		$asignadors = $this->Asignacione->Asignador->find('list');
		$responsables = $this->Asignacione->Responsable->find('list', $responsable_options);
		$parents = $this->Asignacione->ParentAsignacione->find('list');
		$dependencias = $this->Asignacione->Dependencia->find('list');
		$users = $this->Asignacione->User->find('list', $user_options);
		$this->set(compact('auth_user', 'responsables', 'parent', 'dependencias', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Asignacione->id = $id;
		if (!$this->Asignacione->exists()) {
			throw new NotFoundException(__('Invalid asignacione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Asignacione->delete()) {
			$this->decrease_contador('A');
			$this->Session->setFlash(__('The asignacione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The asignacione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function getAsignaciones() {
		$this->layout = false;

		$auth_user = $this->Session->read('Auth.User');
		if ($auth_user['group_id'] == 1) {
			$options['conditions'] = array('Asignacione.parent_id' => null, 'Asignacione.completada' => 0);
		} else {
			$options['joins'] = array(
				array(
					'table' => 'asignaciones_users',
					'alias' => 'AsignacionesUser',
					'type' => 'LEFT',
					'conditions' => array(
						'AsignacionesUser.asignacione_id = Asignacione.id',
					)
				)
			);
			$options['conditions'] = array(
				'Asignacione.parent_id' => null,
				'Asignacione.completada' => 0,
				'OR' => array(
					'Asignacione.asignador_id' => $auth_user['id'],
					'Asignacione.responsable_id' => $auth_user['id'],
					'AsignacionesUser.user_id' => $auth_user['id'],
				)
			);
		}
		$asignaciones = $this->Asignacione->find('all', $options);

		$asignacione_ids = array();
		foreach ($asignaciones as &$asignacione) {
			$diff = strtotime($asignacione['Asignacione']['fecha_entrega']) - strtotime($asignacione['Asignacione']['fecha_asignacion']);
			$asignacione['Asignacione']['dias_disponibles'] = floor($diff / (60*60*24));
			if ($asignacione['Asignacione']['dias_disponibles'] < 1) {
				$asignacione['Asignacione']['dias_disponibles'] = 1;
			}

			$diff = strtotime($asignacione['Asignacione']['fecha_entrega']) - strtotime(date('Y-m-d'));
			$asignacione['Asignacione']['dias_transcurridos'] = floor($diff / (60*60*24));

			$asignacione['Asignacione']['progreso'] = 100 - ($asignacione['Asignacione']['dias_transcurridos'] * 100 / $asignacione['Asignacione']['dias_disponibles']);
			if ($asignacione['Asignacione']['progreso'] > 100) {
				$asignacione['Asignacione']['progreso'] = 100;
			}
			if ($asignacione['Asignacione']['progreso'] < 51) {
				$asignacione['Asignacione']['bar_class'] = 'success';
			} else if ($asignacione['Asignacione']['progreso'] > 50 && ($asignacione['Asignacione']['progreso'] < 80)) {
				$asignacione['Asignacione']['bar_class'] = 'warning';
			} else {
				$asignacione['Asignacione']['bar_class'] = 'danger';
			}
			$this->Asignacione->save($asignacione);

			$asignacione['ChildrenAsignacione'] = $this->Asignacione->children($asignacione['Asignacione']['id'], false, null, null, null, 1, 1);
			foreach ($asignacione['ChildrenAsignacione'] as &$child) {
				if ($child['Asignacione']['progreso'] < 51) {
					$child['Asignacione']['bar_class'] = 'danger';
				} else if ($child['Asignacione']['progreso'] > 50 && ($child['Asignacione']['progreso'] < 80)) {
					$child['Asignacione']['bar_class'] = 'warning';
				} else {
					$child['Asignacione']['bar_class'] = 'success';
				}
			}
			$asignacione_ids = array_merge(array($asignacione['Asignacione']['id']), Hash::extract($asignacione['ChildrenAsignacione'], '{n}.Asignacione.id'));
		}
		$options['conditions'] = array(
			'Avance.asignacione_id' => $asignacione_ids
		);
		$avances = $this->Asignacione->Avance->find('all', $options);
		foreach ($avances as &$avance) {
			if ($avance['Avance']['porcentaje_avanzado'] < 51) {
				$avance['Avance']['bar_class'] = 'danger';
			} else if ($avance['Avance']['porcentaje_avanzado'] > 50 && ($avance['Avance']['porcentaje_avanzado'] < 80)) {
				$avance['Avance']['bar_class'] = 'warning';
			} else {
				$avance['Avance']['bar_class'] = 'success';
			}
		}
		$this->set(compact('asignaciones', 'avances'));
	}

	public function finalizar($id) {
		if ($this->request->is(array('post', 'put'))) {
			$asignacione = $this->Asignacione->findById($id);
			$asignacione['Asignacione']['completada'] = 1;
			if ($this->Asignacione->save($asignacione)) {
				$this->Session->setFlash(__('The asignacione has been ended.'));
			} else {
				$this->Session->setFlash(__('The asignacione could not be ended. Please, try again.'));
			}
		}
		return $this->redirect(array('action' => 'index'));
	}
}
