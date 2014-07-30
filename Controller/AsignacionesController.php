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
	public function add($parent_id = null) {
		$auth_user = $this->Session->read('Auth.User');

		$parent = null;
		if ($parent_id) {
			$this->Asignacione->ParentAsignacione->recursive = -1;
			$parent = $this->Asignacione->ParentAsignacione->findById($parent_id);
		}

		if ($this->request->is('post')) {
			$this->Asignacione->create();
			$this->request->data['Asignacione']['asignador_id'] = $auth_user['id'];
			$this->request->data['Asignacione']['parent_id'] = $parent_id;
			if ($this->Asignacione->save($this->request->data)) {
				if ($parent_id) {
					$asignacione = $this->Asignacione->findById($parent_id);
					$asignacione['Asignacione']['porcentaje_distribuido'] += $this->request->data['Asignacione']['porcentaje_asignado'];
					$this->Asignacione->save($asignacione);
				} else {
					$this->increase_contador('A');
				}
				$this->Session->setFlash(__('The asignacione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asignacione could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data['Asignacione']['codigo'] = $this->get_last_code('A');
		}
		$responsables = $this->Asignacione->Responsable->find('list', array('conditions' => array('Responsable.id NOT' => $auth_user['id'])));
		$dependencias = $this->Asignacione->Dependencia->find('list');
		$users = $this->Asignacione->User->find('list');
		$this->set(compact('responsables', 'parent', 'dependencias', 'users'));
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
		$dependencias = $this->Asignacione->Dependencia->find('list');
		$users = $this->Asignacione->User->find('list');
		$this->set(compact('responsables', 'parent', 'dependencias', 'users'));
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
			$this->decrease_contador('A');
			$this->Session->setFlash(__('The asignacione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The asignacione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function getAsignaciones() {
		$this->layout = false;
		$this->Asignacione->recursive = 0;
		$asignaciones = $this->Asignacione->findAllByParentIdAndCompletada(null, 0);
		$asignacione_ids = array();
		foreach ($asignaciones as &$asignacione) {
			$diff = strtotime($asignacione['Asignacione']['fecha_entrega']) - strtotime($asignacione['Asignacione']['fecha_asignacion']);
			$asignacione['Asignacione']['dias_disponibles'] = floor($diff / (60*60*24));
			if ($asignacione['Asignacione']['dias_disponibles'] < 1) {
				$asignacione['Asignacione']['dias_disponibles'] = 1;
			}

			$diff = strtotime($asignacione['Asignacione']['fecha_entrega']) - strtotime(date('Y-m-d'));
			$asignacione['Asignacione']['dias_transcurridos'] = floor($diff / (60*60*24));

			$asignacione['Asignacione']['progreso'] = 100 - ($asignacione['Asignacione']['dias_transcurridos'] * 100 / $asignacione['Asignacione']['dias_disponibles']);
			if ($asignacione['Asignacione']['progreso'] > 100) {
				$asignacione['Asignacione']['progreso'] = 100;
			}
			if ($asignacione['Asignacione']['progreso'] < 51) {
				$asignacione['Asignacione']['bar_class'] = 'success';
			} else if ($asignacione['Asignacione']['progreso'] > 50 && ($asignacione['Asignacione']['progreso'] < 80)) {
				$asignacione['Asignacione']['bar_class'] = 'warning';
			} else {
				$asignacione['Asignacione']['bar_class'] = 'danger';
			}
			$this->Asignacione->save($asignacione);

			$asignacione['ChildrenAsignacione'] = $this->Asignacione->children($asignacione['Asignacione']['id'], false, null, null, null, 1, 0);
			foreach ($asignacione['ChildrenAsignacione'] as &$child) {
				if ($child['Asignacione']['progreso'] < 51) {
					$child['Asignacione']['bar_class'] = 'danger';
				} else if ($child['Asignacione']['progreso'] > 50 && ($child['Asignacione']['progreso'] < 80)) {
					$child['Asignacione']['bar_class'] = 'warning';
				} else {
					$child['Asignacione']['bar_class'] = 'success';
				}
			}
			$asignacione_ids = array_merge(array($asignacione['Asignacione']['id']), Hash::extract($asignacione['ChildrenAsignacione'], '{n}.Asignacione.id'));
		}
		$options['conditions'] = array(
			'Avance.asignacione_id' => $asignacione_ids
		);
		$avances = $this->Asignacione->Avance->find('all', $options);
		foreach ($avances as &$avance) {
			if ($avance['Avance']['porcentaje_avanzado'] < 51) {
				$avance['Avance']['bar_class'] = 'danger';
			} else if ($avance['Avance']['porcentaje_avanzado'] > 50 && ($avance['Avance']['porcentaje_avanzado'] < 80)) {
				$avance['Avance']['bar_class'] = 'warning';
			} else {
				$avance['Avance']['bar_class'] = 'success';
			}
		}
		$this->set(compact('asignaciones', 'avances'));
	}

	public function finalizar($id) {
		if ($this->request->is(array('post', 'put'))) {
			$asignacione = $this->Asignacione->findById($id);
			$asignacione['Asignacione']['completada'] = 1;
			if ($this->Asignacione->save($asignacione)) {
				$this->Session->setFlash(__('The asignacione has been ended.'));
			} else {
				$this->Session->setFlash(__('The asignacione could not be ended. Please, try again.'));
			}
		}
		return $this->redirect(array('action' => 'index'));
	}
}
