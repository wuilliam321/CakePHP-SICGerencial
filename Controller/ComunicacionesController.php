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
		$this->Comunicacione->recursive = 0;
		$this->set('comunicaciones', $this->Paginator->paginate());
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
		$this->set('comunicacione', $this->Comunicacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($parent_id = null) {
		$auth_user = $this->Session->read('Auth.User');
		$parent = null;
		if ($parent_id) {
			$parent = $this->Comunicacione->findById($parent_id);
		}

		if ($this->request->is('post')) {
			$this->request->data['Comunicacione']['remitente_id'] = $auth_user['id'];
			$this->request->data['Comunicacione']['parent_id'] = $parent_id;
			$this->request->data['Comunicacione']['fecha_remision'] = date('Y-m-d H:i:s');
			$this->Comunicacione->create();
			if ($this->Comunicacione->save($this->request->data)) {
				if (!$parent_id) {
					$this->increase_contador('C');
				}
				$this->Session->setFlash(__('The comunicacione has been saved.'));
				return $this->redirect(array('controller' => 'asignaciones', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comunicacione could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data['Comunicacione']['codigo'] = $this->get_last_code('C');
		}
		$this->Comunicacione->Remitente->recursive = -1;
		$remitente = $this->Comunicacione->Remitente->findById($auth_user['id']);
		$users = $this->Comunicacione->User->find('list');
		$this->set(compact('remitente', 'parent', 'users'));
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
			if ($this->Comunicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The comunicacione has been saved.'));
				return $this->redirect(array('controller' => 'asignaciones', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comunicacione could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $comunicacione;
		}
		$this->Comunicacione->Remitente->recursive = -1;
		$remitente = $this->Comunicacione->Remitente->findById($auth_user['id']);
		$parents = $this->Comunicacione->ParentComunicacione->find('list');
		$users = $this->Comunicacione->User->find('list');
		$this->set(compact('parent', 'remitente', 'parents', 'users'));
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
		$this->Comunicacione->recursive = 0;
		$comunicaciones = $this->Comunicacione->findAllByParentId(null);
		foreach ($comunicaciones as &$comunicacione) {
			$comunicacione['ChildrenComunicacione'] = $this->Comunicacione->children($comunicacione['Comunicacione']['id'], false, null, null, null, 1, 0);
		}
		$this->set(compact('comunicaciones'));
	}
}
