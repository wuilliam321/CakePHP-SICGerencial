<?php
App::uses('AppController', 'Controller');
/**
 * Asignaciones Controller
 *
 * @property Asignacione $Asignacione
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AsignacionesController extends AppController {

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
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Asignacione->exists($id)) {
			throw new NotFoundException(__('Invalid asignacione'));
		}
		$options = array('conditions' => array('Asignacione.' . $this->Asignacione->primaryKey => $id));
		$this->set('asignacione', $this->Asignacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($tipo = null, $parent_id = null) {
		$auth_user = $this->Session->read('Auth.User');

		$parent = null;
		if ($parent_id) {
			$this->Asignacione->ParentAsignacione->recursive = -1;
			$parent = $this->Asignacione->ParentAsignacione->findById($parent_id);
		}

		if ($this->request->is('post')) {
			$this->Asignacione->create();
			$this->request->data['Asignacione']['tipo'] = $tipo;
			$this->request->data['Asignacione']['asignador_id'] = $auth_user['id'];
			$this->request->data['Asignacione']['parent_id'] = $parent_id;
			if ($parent_id) {
				$this->request->data['Asignacione']['tipo'] = $parent['ParentAsignacione']['tipo'];
			}
			if ($this->Asignacione->save($this->request->data)) {
				$this->Session->setFlash(__('The asignacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asignacione could not be saved. Please, try again.'));
			}
		}
		$responsables = $this->Asignacione->Responsable->find('list', array('conditions' => array('Responsable.id NOT' => $auth_user['id'])));

		$users = $this->Asignacione->User->find('list');
		$this->set(compact('responsables', 'parent', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Asignacione->exists($id)) {
			throw new NotFoundException(__('Invalid asignacione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Asignacione->save($this->request->data)) {
				$this->Session->setFlash(__('The asignacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asignacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Asignacione.' . $this->Asignacione->primaryKey => $id));
			$this->request->data = $this->Asignacione->find('first', $options);
		}
		$parent['ParentAsignacione'] = $this->request->data['ParentAsignacione'];
		$asignadors = $this->Asignacione->Asignador->find('list');
		$responsables = $this->Asignacione->Responsable->find('list');
		$parents = $this->Asignacione->ParentAsignacione->find('list');
		$users = $this->Asignacione->User->find('list');
		$this->set(compact('asignadors', 'responsables', 'parents', 'parent', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Asignacione->id = $id;
		if (!$this->Asignacione->exists()) {
			throw new NotFoundException(__('Invalid asignacione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Asignacione->delete()) {
			$this->Session->setFlash(__('The asignacione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The asignacione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function getAsignacionesByTipo($tipo) {
		$this->layout = false;
		$this->set('asignaciones', $this->Asignacione->findAllByTipo($tipo));
	}

	public function getAsignaciones() {
		$this->layout = false;
		$this->Asignacione->recursive = 0;
		$asignaciones = $this->Asignacione->findAllByTipoAndParentId('I', null);
		foreach ($asignaciones as &$asignacione) {
			$asignacione['ChildrenAsignacione'] = $this->Asignacione->children($asignacione['Asignacione']['id'], false, null, null, null, 1, 0);
			$asignacione['Avance'] = $this->Asignacione->Avance->findAllByAsignacioneId($asignacione['Asignacione']['id']);
		}
		$this->set(compact('asignaciones'));
	}

	public function getComunicaciones() {
		$this->layout = false;
		$this->Asignacione->recursive = 0;
		$comunicaciones = $this->Asignacione->findAllByTipoAndParentId('C', null);
		foreach ($comunicaciones as &$comunicacione) {
			$comunicacione['ChildrenComunicacione'] = $this->Asignacione->children($comunicacione['Asignacione']['id'], false, null, null, null, 1, 0);
		}
		$this->set(compact('comunicaciones'));
	}
}
