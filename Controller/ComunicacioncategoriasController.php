<?php
App::uses('AppController', 'Controller');
/**
 * Comunicacioncategorias Controller
 *
 * @property Comunicacioncategoria $Comunicacioncategoria
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ComunicacioncategoriasController extends AppController {

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
		$this->Comunicacioncategoria->recursive = 0;
		$this->set('comunicacioncategorias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Comunicacioncategoria->exists($id)) {
			throw new NotFoundException(__('Invalid comunicacioncategoria'));
		}
		$options = array('conditions' => array('Comunicacioncategoria.' . $this->Comunicacioncategoria->primaryKey => $id));
		$this->set('comunicacioncategoria', $this->Comunicacioncategoria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Comunicacioncategoria->create();
			if ($this->Comunicacioncategoria->save($this->request->data)) {
				$this->Session->setFlash(__('The comunicacioncategoria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comunicacioncategoria could not be saved. Please, try again.'));
			}
		}
		$dependencias = $this->Comunicacioncategoria->Dependencia->find('list');
		$this->set(compact('dependencias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Comunicacioncategoria->exists($id)) {
			throw new NotFoundException(__('Invalid comunicacioncategoria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comunicacioncategoria->save($this->request->data)) {
				$this->Session->setFlash(__('The comunicacioncategoria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comunicacioncategoria could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Comunicacioncategoria.' . $this->Comunicacioncategoria->primaryKey => $id));
			$this->request->data = $this->Comunicacioncategoria->find('first', $options);
		}
		$dependencias = $this->Comunicacioncategoria->Dependencia->find('list');
		$this->set(compact('dependencias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Comunicacioncategoria->id = $id;
		if (!$this->Comunicacioncategoria->exists()) {
			throw new NotFoundException(__('Invalid comunicacioncategoria'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Comunicacioncategoria->delete()) {
			$this->Session->setFlash(__('The comunicacioncategoria has been deleted.'));
		} else {
			$this->Session->setFlash(__('The comunicacioncategoria could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
