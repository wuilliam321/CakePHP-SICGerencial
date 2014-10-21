<?php
App::uses('AppController', 'Controller');
/**
 * Directorios Controller
 *
 * @property Directorio $Directorio
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DirectoriosController extends AppController {

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
		$options['order'] = array('Directorio.id' => 'DESC');
		$options['limit'] = 3;
		if ($auth_user['group_id'] != 1) {
			$options['joins'] = array(
				array(
					'table' => 'directorios_users',
					'alias' => 'DirectoriosUser',
					'type' => 'LEFT',
					'conditions' => array(
						'DirectoriosUser.directorio_id = Directorio.id',
					)
				)
			);
			$options['conditions'] = array(
				'DirectoriosUser.user_id' => $auth_user['id'],
			);
		}
		$this->Paginator->settings = $options;
		$directorios = $this->Paginator->paginate('Directorio');
		$this->set(compact('directorios'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Directorio->create();
			$this->request->data['Punto'] = Hash::filter($this->request->data['Punto']);
			if ($this->Directorio->saveWithAttachments($this->request->data, 'Directorio')) {
				$this->increase_contador('D');
				$this->Session->setFlash(__('The directorio has been saved.'), 'flash_success');
				return $this->redirect(array('action' => 'edit', $this->Directorio->getLastInsertID()));
			} else {
				$this->Session->setFlash(__('The directorio could not be saved. Please, try again.'), 'flash_error');
			}
		} else {
			$this->request->data['Directorio']['codigo'] = $this->get_last_code('D');
		}
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
		$users = $this->Directorio->User->find('list', $user_options);
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Directorio->exists($id)) {
			throw new NotFoundException(__('Invalid directorio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Punto'] = Hash::filter($this->request->data['Punto']);
			if ($this->Directorio->saveWithAttachments($this->request->data, 'Directorio')) {
				$puntos_ids_delete = Hash::extract($this->request->data['Punto'], '{n}[eliminar>0].id');
				if (!empty($puntos_ids_delete)) {
					// $this->Directorio->Punto->deleteAll(array('conditions' => array('Punto.id' => $puntos_ids_delete)));
					$this->Directorio->Punto->delete($puntos_ids_delete);
				}
				$this->Session->setFlash(__('The directorio has been saved.'), 'flash_success');
				return $this->redirect(array('action' => 'edit', $id));
			} else {
				$this->Session->setFlash(__('The directorio could not be saved. Please, try again.'), 'flash_error');
			}
		} else {
			$options = array('conditions' => array('Directorio.' . $this->Directorio->primaryKey => $id));
			$this->request->data = $this->Directorio->find('first', $options);
		}
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
		$users = $this->Directorio->User->find('list', $user_options);
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Directorio->id = $id;
		if (!$this->Directorio->exists()) {
			throw new NotFoundException(__('Invalid directorio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Directorio->delete()) {
			$this->decrease_contador('D');
			$this->Session->setFlash(__('The directorio has been deleted.'), 'flash_success');
		} else {
			$this->Session->setFlash(__('The directorio could not be deleted. Please, try again.'), 'flash_error');
		}
		return $this->redirect(array('controller' => 'asignaciones', 'action' => 'index'));
	}

	public function getDirectorios() {
		$this->layout = false;
		$auth_user = $this->Session->read('Auth.User');
		if ($auth_user['group_id'] == 1) {
			$directorios = $this->Directorio->find('all');
		} else {
			$options['joins'] = array(
				array(
					'table' => 'directorios_users',
					'alias' => 'DirectoriosUser',
					'type' => 'LEFT',
					'conditions' => array(
						'DirectoriosUser.directorio_id = Directorio.id',
					)
				)
			);
			$options['conditions'] = array(
				'DirectoriosUser.user_id' => $auth_user['id'],
			);
			$directorios = $this->Directorio->find('all', $options);
		}
		$this->set(compact('directorios'));
	}

	public function finalizar($id) {
		if ($this->request->is(array('post', 'put'))) {
			$asignacione = $this->Directorio->findById($id);
			$asignacione['Directorio']['completada'] = 1;
			if ($this->Directorio->save($asignacione)) {
				$this->Session->setFlash(__('The directorio has been ended.'), 'flash_success');
			} else {
				$this->Session->setFlash(__('The directorio could not be ended. Please, try again.'), 'flash_error');
			}
		}
		return $this->redirect(array('action' => 'index'));
	}
}
