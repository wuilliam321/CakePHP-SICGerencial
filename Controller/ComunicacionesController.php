<?php
App::uses('AppController', 'Controller');
/**
 * Comunicaciones Controller
 *
 * @property Comunicacione $Comunicacione
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ComunicacionesController extends AppController {

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
		$auth_user = $this->Session->read('Auth.User');
		if ($auth_user['group_id'] == 1) {
			$comunicaciones = $this->Comunicacione->findAllByParentId(null);
		} else {
			$options['joins'] = array(
				array(
					'table' => 'comunicaciones_users',
					'alias' => 'ComunicacionesUser',
					'type' => 'LEFT',
					'conditions' => array(
						'ComunicacionesUser.comunicacione_id = Comunicacione.id',
					)
				)
			);
			$options['conditions'] = array(
				'Comunicacione.parent_id' => null,
				'OR' => array(
					'Comunicacione.remitente_id' => $auth_user['id'],
					'ComunicacionesUser.user_id' => $auth_user['id'],
				)
			);
			$comunicaciones = $this->Comunicacione->find('all', $options);
		}
		foreach ($comunicaciones as &$comunicacione) {
			$comunicacione['ChildrenComunicacione'] = $this->Comunicacione->children($comunicacione['Comunicacione']['id'], false, null, null, null, 1, 1);
		}
		$this->set(compact('comunicaciones'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Comunicacione->exists($id)) {
			throw new NotFoundException(__('Invalid comunicacione'));
		}
		$options = array('conditions' => array('Comunicacione.' . $this->Comunicacione->primaryKey => $id));
		$this->Comunicacione->recursive = 1;
		$comunicacione = $this->Comunicacione->find('first', $options);
		$comunicacione_children = $this->Comunicacione->children($id, false, null, null, null, 1, 1);
		$comunicacione['ChildComunicacione'] = $comunicacione_children;
		foreach ($comunicacione['ChildComunicacione'] as &$child) {
			$child['Comunicacione']['level'] = sizeof($this->Comunicacione->getPath($child['Comunicacione']['id'])) - 2;
		}
		$reciben_ids = array_merge(array($comunicacione['Comunicacione']['remitente_id']), Hash::extract($comunicacione['User'], '{n}.id'));
		$this->set(compact('comunicacione', 'reciben_ids'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($parent_id = null) {
		$auth_user = $this->Session->read('Auth.User');
		$parent_redirect = $this->Comunicacione->getPath($parent_id);
		$parent = null;
		if ($parent_id) {
			$parent = $this->Comunicacione->findById($parent_id);
		}

		if ($this->request->is('post')) {
			$this->request->data['Comunicacione']['remitente_id'] = $auth_user['id'];
			$this->request->data['Comunicacione']['parent_id'] = $parent_id;
			$this->request->data['Comunicacione']['fecha_remision'] = date('Y-m-d H:i:s');
			$this->Comunicacione->create();
			if ($this->Comunicacione->saveWithAttachments($this->request->data, 'Comunicacione')) {
				if (!$parent_id) {
					$this->increase_contador('C');
				}
				$this->Session->setFlash(__('The comunicacione has been saved.'));
				if ($parent_id) {
					$parent_redirect = $parent_redirect[0]['Comunicacione']['id'];
				} else {
					$parent_redirect = $this->Comunicacione->getLastInsertID();
				}
				return $this->redirect(array('action' => 'view', $parent_redirect));
			} else {
				$this->Session->setFlash(__('The comunicacione could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data['Comunicacione']['codigo'] = $this->get_last_code('C');
		}
		if ($parent_id) {
			$parent_id = $parent_redirect[0]['Comunicacione']['id'];
		}
		$this->Comunicacione->Remitente->recursive = -1;
		$remitente = $this->Comunicacione->Remitente->findById($auth_user['id']);

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
		$users = $this->Comunicacione->User->find('list', $user_options);
		$comunicacioncategorias = $this->Comunicacione->Comunicacioncategoria->find('list');
		$this->set(compact('remitente', 'parent', 'users', 'comunicacioncategorias', 'parent_id'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Comunicacione->exists($id)) {
			throw new NotFoundException(__('Invalid comunicacione'));
		}
		$auth_user = $this->Session->read('Auth.User');
		$options = array('conditions' => array('Comunicacione.' . $this->Comunicacione->primaryKey => $id));
		$comunicacione = $this->Comunicacione->find('first', $options);
		$parent = null;
		if (!$comunicacione['Comunicacione']['codigo']) {
			$this->Comunicacione->recursive = 0;
			$parent = $this->Comunicacione->findById($comunicacione['ParentComunicacione']['id']);
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comunicacione->saveWithAttachments($this->request->data, 'Comunicacione')) {
				$this->Session->setFlash(__('The comunicacione has been saved.'));
				$parent_redirect = $this->Comunicacione->getPath($id);
				$parent_redirect = $parent_redirect[0]['Comunicacione']['id'];
				return $this->redirect(array('action' => 'view', $parent_redirect));
			} else {
				$this->Session->setFlash(__('The comunicacione could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $comunicacione;
		}
		$this->Comunicacione->Remitente->recursive = -1;
		$remitente = $this->Comunicacione->Remitente->findById($auth_user['id']);
		$parents = $this->Comunicacione->ParentComunicacione->find('list');
		
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
		$users = $this->Comunicacione->User->find('list', $user_options);
		$comunicacioncategorias = $this->Comunicacione->Comunicacioncategoria->find('list');
		$this->set(compact('parent', 'remitente', 'parents', 'users', 'comunicacioncategorias'));

	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Comunicacione->id = $id;
		if (!$this->Comunicacione->exists()) {
			throw new NotFoundException(__('Invalid comunicacione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Comunicacione->delete()) {
			$this->decrease_contador('C');
			$this->Session->setFlash(__('The comunicacione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The comunicacione could not be deleted. Please, try again.'));
		}
				return $this->redirect(array('controller' => 'asignaciones', 'action' => 'index'));
	}

	public function getComunicaciones() {
		$this->layout = false;
		$auth_user = $this->Session->read('Auth.User');
		if ($auth_user['group_id'] == 1) {
			$comunicaciones = $this->Comunicacione->findAllByParentId(null);
		} else {
			$options['joins'] = array(
				array(
					'table' => 'comunicaciones_users',
					'alias' => 'ComunicacionesUser',
					'type' => 'LEFT',
					'conditions' => array(
						'ComunicacionesUser.comunicacione_id = Comunicacione.id',
					)
				)
			);
			$options['conditions'] = array(
				'Comunicacione.parent_id' => null,
				'OR' => array(
					'Comunicacione.remitente_id' => $auth_user['id'],
					'ComunicacionesUser.user_id' => $auth_user['id'],
				)
			);
			$comunicaciones = $this->Comunicacione->find('all', $options);
		}
		foreach ($comunicaciones as &$comunicacione) {
			$comunicacione['ChildrenComunicacione'] = $this->Comunicacione->children($comunicacione['Comunicacione']['id'], false, null, null, null, 1, 1);
		}
		$this->set(compact('comunicaciones'));
	}
}
