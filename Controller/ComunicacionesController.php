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
	public function add() {
		if ($this->request->is('post')) {
			$this->Comunicacione->create();
			if ($this->Comunicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The comunicacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comunicacione could not be saved. Please, try again.'));
			}
		}
		$remitentes = $this->Comunicacione->Remitente->find('list');
		$parents = $this->Comunicacione->ParentComunicacione->find('list');
		$users = $this->Comunicacione->User->find('list');
		$this->set(compact('remitentes', 'parents', 'users'));
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
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comunicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The comunicacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comunicacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Comunicacione.' . $this->Comunicacione->primaryKey => $id));
			$this->request->data = $this->Comunicacione->find('first', $options);
		}
		$remitentes = $this->Comunicacione->Remitente->find('list');
		$parents = $this->Comunicacione->ParentComunicacione->find('list');
		$users = $this->Comunicacione->User->find('list');
		$this->set(compact('remitentes', 'parents', 'users'));
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
			$this->Session->setFlash(__('The comunicacione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The comunicacione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
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
