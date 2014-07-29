<?php
App::uses('AppController', 'Controller');
/**
 * Correcciones Controller
 *
 * @property Correccione $Correccione
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CorreccionesController extends AppController {

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
		$this->Correccione->recursive = 0;
		$this->set('correcciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Correccione->exists($id)) {
			throw new NotFoundException(__('Invalid correccione'));
		}
		$options = array('conditions' => array('Correccione.' . $this->Correccione->primaryKey => $id));
		$this->set('correccione', $this->Correccione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Correccione->create();
			if ($this->Correccione->save($this->request->data)) {
				$this->Session->setFlash(__('The correccione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The correccione could not be saved. Please, try again.'));
			}
		}
		$comunicaciones = $this->Correccione->Comunicacione->find('list');
		$this->set(compact('comunicaciones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Correccione->exists($id)) {
			throw new NotFoundException(__('Invalid correccione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Correccione->save($this->request->data)) {
				$this->Session->setFlash(__('The correccione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The correccione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Correccione.' . $this->Correccione->primaryKey => $id));
			$this->request->data = $this->Correccione->find('first', $options);
		}
		$comunicaciones = $this->Correccione->Comunicacione->find('list');
		$this->set(compact('comunicaciones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Correccione->id = $id;
		if (!$this->Correccione->exists()) {
			throw new NotFoundException(__('Invalid correccione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Correccione->delete()) {
			$this->Session->setFlash(__('The correccione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The correccione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
