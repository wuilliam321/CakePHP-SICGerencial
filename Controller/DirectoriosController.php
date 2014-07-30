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
		$this->Directorio->recursive = 0;
		$this->set('directorios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Directorio->exists($id)) {
			throw new NotFoundException(__('Invalid directorio'));
		}
		$options = array('conditions' => array('Directorio.' . $this->Directorio->primaryKey => $id));
		$this->set('directorio', $this->Directorio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Directorio->create();
			if ($this->Directorio->save($this->request->data)) {
				$this->increase_contador('D');
				$this->Session->setFlash(__('The directorio has been saved.'));
				return $this->redirect(array('controller' => 'asignaciones', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The directorio could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data['Directorio']['codigo'] = $this->get_last_code('D');
		}
		$users = $this->Directorio->User->find('list');
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
			if ($this->Directorio->save($this->request->data)) {
				$this->Session->setFlash(__('The directorio has been saved.'));
				return $this->redirect(array('controller' => 'asignaciones', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The directorio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Directorio.' . $this->Directorio->primaryKey => $id));
			$this->request->data = $this->Directorio->find('first', $options);
		}
		$users = $this->Directorio->User->find('list');
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
			$this->Session->setFlash(__('The directorio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The directorio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('controller' => 'asignaciones', 'action' => 'index'));
	}

	public function getDirectorios() {
		$this->layout = false;
		$this->Directorio->recursive = 1;
		$directorios = $this->Directorio->find('all');
		$this->set(compact('directorios'));
	}
}
