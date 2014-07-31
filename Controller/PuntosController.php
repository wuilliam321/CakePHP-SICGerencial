<?php
App::uses('AppController', 'Controller');
/**
 * Puntos Controller
 *
 * @property Punto $Punto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PuntosController extends AppController {

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
		$this->Punto->recursive = 0;
		$this->set('puntos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Punto->exists($id)) {
			throw new NotFoundException(__('Invalid punto'));
		}
		$options = array('conditions' => array('Punto.' . $this->Punto->primaryKey => $id));
		$this->set('punto', $this->Punto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($directorio_id) {
		$auth_user = $this->Session->read('Auth.User');
		$this->Punto->Directorio->recursive = 0;
		$directorio = $this->Punto->Directorio->findById($directorio_id);
		if ($this->request->is('post')) {
			$this->Punto->create();
			$this->request->data['Punto']['directorio_id'] = $directorio_id;
			if ($this->Punto->save($this->request->data)) {
				$this->Session->setFlash(__('The punto has been saved.'));
				return $this->redirect(array('controller' => 'asignaciones', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The punto could not be saved. Please, try again.'));
			}
		}
		$this->set(compact('directorio'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Punto->exists($id)) {
			throw new NotFoundException(__('Invalid punto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Punto->save($this->request->data)) {
				$this->Session->setFlash(__('The punto has been saved.'));
				return $this->redirect(array('controller' => 'asignaciones', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The punto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Punto.' . $this->Punto->primaryKey => $id));
			$this->request->data = $this->Punto->find('first', $options);
		}
		$directorio = $this->Punto->Directorio->findById($this->request->data['Directorio']['id']);
		$this->set(compact('directorio'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Punto->id = $id;
		if (!$this->Punto->exists()) {
			throw new NotFoundException(__('Invalid punto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Punto->delete()) {
			$this->Session->setFlash(__('The punto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The punto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('controller' => 'asignaciones', 'action' => 'index'));
	}
}
