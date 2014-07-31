<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

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
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$sistemas = $this->User->Sistema->find('list');
		$asignaciones = $this->User->Asignacione->find('list');
		$this->set(compact('groups', 'sistemas', 'asignaciones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$sistemas = $this->User->Sistema->find('list');
		$asignaciones = $this->User->Asignacione->find('list');
		$this->set(compact('groups', 'sistemas', 'asignaciones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function profile() {
		$auth_user = $this->Session->read("Auth.User");
		if (!$auth_user) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data, array('cargo'))) {
				$this->Session->setFlash(__('The user has been saved.'), 'flash_success');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash_error');
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $auth_user['id']));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$sistemas = $this->User->Sistema->find('list');
		$this->set(compact('groups', 'sistemas', 'auth_user'));
	}
	

/**
 * login method
 *
 * @return void
 */
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->User->setDataSource("auth");
				$auth_user = $this->Session->read("Auth.User");
				$this->User->recursive = -1;
				$user = $this->User->findByUsername($this->request->data['User']['username']);
				if ($user) {
					$this->checkAro($user);
					$user['User']['password'] = $this->request->data['User']['password'];
					$user = $this->User->save($user);
					$is_new = false;
				} else {
					$auth_user['User']['group_id'] = 9; // 99 = Bloqueado // Por ahora todos son asistentes fiscals
					$user = $this->User->save($auth_user);
					$user = $this->User->findByUsername($this->request->data['User']['username']);
					$is_new = true;
				}
				$this->Auth->login($user['User']);
				if ($is_new || ($user['User']['group_id'] == 99)) {
					return $this->redirect("/users/profile/" . $user['User']['id']);
				} else {
					return $this->redirect($this->Auth->redirectUrl());
				}
			}
			$this->Session->setFlash(__('Your username or password was incorrect.'), 'flash_error');
		}
	}
	
	public function logout() {
		$this->Session->setFlash(__('Good-Bye'), 'flash_success');
		$this->redirect($this->Auth->logout());
	}
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('login', 'logout', 'initDB', 'rebuildARO'); // We can remove this line after we're finished
	}
	
	public function checkAro($user) {
		$aro = new Aro();
		$conditions = array(
			'conditions' => array(
				'parent_id' => $user['User']['group_id'],
				'foreign_key' => $user['User']['id']
			)
		);
		$myaro = $aro->find('first', $conditions);
		if (!$myaro) {
			$data = array(
				'foreign_key' => $user['User']['id'],
				'model' => 'User',
				'parent_id' => $user['User']['group_id']
			);
			$myaro = $aro->create();
			$aro->save($data);
		}
	}
		
	public function initDB() {
		$group = $this->User->Group;
		// Admin puede hacer todo
		$group->id = 1;
		$this->Acl->allow($group, 'controllers');
		$group->id = 9;
		$this->Acl->allow($group, 'controllers');
/*		
		// Contralor puede todo menos algunas cosas
		$group->id = 2;
		$this->Acl->allow($group, 'controllers');
		$this->Acl->deny($group, 'controllers/Leyes/delete');
		$this->Acl->deny($group, 'controllers/Atencioncategorias/delete');
		
		// Asistente de auditor fiscal
		$group->id = 9;
		$this->Acl->allow($group, 'controllers');
		$this->Acl->deny($group, 'controllers/Leyes/delete');
		$this->Acl->deny($group, 'controllers/Atencioncategorias/delete');
		
		// Bloqueado
		$group->id = 99;
		$this->Acl->deny($group, 'controllers');
		$this->Acl->allow($group, 'controllers/Users/profile');*/
		echo "all done";
		return true;
	}
	
	public function rebuildARO() {
		// Build the groups.
		$groups = $this->User->Group->find('all');
		$aro = new Aro();
		foreach($groups as $group) {
			$aro->create();
			$aro->save(array(
			//	'alias'=>$group['Group']['name'],
				'foreign_key' => $group['Group']['id'],
				'model'=>'Group',
				'parent_id' => null
			));
		}
	 
		// Build the users.
		$users = $this->User->find('all');
		$i=0;
		foreach($users as $user) {
			$aroList[$i++]= array(
			//	'alias' => $user['User']['email'],
				'foreign_key' => $user['User']['id'],
				'model' => 'User',
				'parent_id' => $user['User']['group_id']
			);	
		}
		foreach($aroList as $data) {
			$aro->create();
			$aro->save($data);
		}
	 
		echo "AROs rebuilt!";
		return true;
	}
}
