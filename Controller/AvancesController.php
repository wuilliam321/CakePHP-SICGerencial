<?php
App::uses('AppController', 'Controller');
/**
 * Avances Controller
 *
 * @property Avance $Avance
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AvancesController extends AppController {

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
		$this->Avance->recursive = 0;
		$this->set('avances', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Avance->exists($id)) {
			throw new NotFoundException(__('Invalid avance'));
		}
		$options = array('conditions' => array('Avance.' . $this->Avance->primaryKey => $id));
		$this->set('avance', $this->Avance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($asignacione_id) {
		$auth_user = $this->Session->read('Auth.User');
		$this->Avance->Asignacione->recursive = 0;
		$asignacione = $this->Avance->Asignacione->findById($asignacione_id);
		if ($this->request->is('post')) {
			$this->Avance->create();
			$this->request->data['Avance']['asignacione_id'] = $asignacione_id;
			$this->request->data['Avance']['user_id'] = $asignacione['Asignacione']['responsable_id'];
			if ($this->Avance->saveWithAttachments($this->request->data, 'Avance')) {
				$asignacione['Asignacione']['progreso'] = $this->request->data['Avance']['porcentaje_avanzado'];
				$this->Avance->Asignacione->save($asignacione);
				$this->Session->setFlash(__('The avance has been saved.'));
				return $this->redirect(array('controller' => 'asignaciones', 'action' => 'view', $asignacione_id));
			} else {
				$this->Session->setFlash(__('The avance could not be saved. Please, try again.'));
			}
		}
		$this->Avance->User->recursive = -1;
		$user = $this->Avance->User->findById($auth_user['id']);
		$this->set(compact('asignacione', 'user'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Avance->exists($id)) {
			throw new NotFoundException(__('Invalid avance'));
		}
		$auth_user = $this->Session->read('Auth.User');
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Avance->saveWithAttachments($this->request->data, 'Avance')) {
				$avance = $this->Avance->findById($id);
				$asignacione = $this->Avance->Asignacione->findById($avance['Avance']['asignacione_id']);
				$asignacione['Asignacione']['progreso'] = $this->request->data['Avance']['porcentaje_avanzado'];
				$this->Avance->Asignacione->save($asignacione);
				$this->Session->setFlash(__('The avance has been saved.'));
				return $this->redirect(array('action' => 'edit', $id));
			} else {
				$this->Session->setFlash(__('The avance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Avance.' . $this->Avance->primaryKey => $id));
			$this->request->data = $this->Avance->find('first', $options);
		}
		$asignacione = $this->Avance->Asignacione->findById($this->request->data['Avance']['asignacione_id']);
		$this->Avance->User->recursive = -1;
		$user = $this->Avance->User->findById($auth_user['id']);
		$this->set(compact('asignacione', 'user'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Avance->id = $id;
		if (!$this->Avance->exists()) {
			throw new NotFoundException(__('Invalid avance'));
		}
		$avance = $this->Avance->findById($id);
		$this->request->allowMethod('post', 'delete');
		if ($this->Avance->delete()) {
			$this->Session->setFlash(__('The avance has been deleted.'));
		} else {
			$this->Session->setFlash(__('The avance could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('controller' => 'asignaciones', 'action' => 'view', $avance['Avance']['asignacione_id']));
	}
}
