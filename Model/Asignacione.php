<?php
App::uses('AppModel', 'Model');
/**
 * Asignacione Model
 *
 * @property Asignador $Asignador
 * @property Responsable $Responsable
 * @property Asignacione $ParentAsignacione
 * @property Adjunto $Adjunto
 * @property Asignacione $ChildAsignacione
 * @property Correccione $Correccione
 * @property Evaluacione $Evaluacione
 */
class Asignacione extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'titulo';
	public $actsAs = array('Tree');

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		// 'codigo' => array(
		// 	'notEmpty' => array(
		// 		'rule' => array('notEmpty'),
		// 		//'message' => 'Your custom message here',
		// 		//'allowEmpty' => false,
		// 		//'required' => false,
		// 		//'last' => false, // Stop validation after this rule
		// 		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		// 	),
		// ),
		'asignador_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'responsable_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dependencia_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'titulo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'detalles' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'porcentaje_asignado' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'progreso' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha_asignacion' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha_entrega' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Asignador' => array(
			'className' => 'User',
			'foreignKey' => 'asignador_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Responsable' => array(
			'className' => 'User',
			'foreignKey' => 'responsable_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ParentAsignacione' => array(
			'className' => 'Asignacione',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Dependencia' => array(
			'className' => 'Dependencia',
			'foreignKey' => 'dependencia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Attachment' => array(
			'className' => 'Attachment',
			'foreignKey' => 'foreign_key',
			'dependent' => true,
			'conditions' => array(
				'Attachment.model' => 'Asignacione',
			),
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Avance' => array(
			'className' => 'Avance',
			'foreignKey' => 'asignacione_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ChildAsignacione' => array(
			'className' => 'Asignacione',
			'foreignKey' => 'parent_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Evaluacione' => array(
			'className' => 'Evaluacione',
			'foreignKey' => 'asignacione_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'User' => array(
			'className' => 'User',
			'joinTable' => 'asignaciones_users',
			'foreignKey' => 'asignacione_id',
			'associationForeignKey' => 'user_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

	public function getProgresoFisico($asignacione) {
		$this->recursive = -1;
		$children = $this->children($asignacione['Asignacione']['id']);
		$porcentaje_avanzado = 0;

		if ($children) {
			foreach ($children as $child) {
				$porcentaje_avanzado += ($child['Asignacione']['porcentaje_asignado'] * $child['Asignacione']['progreso']) / 100;
				// echo sprintf("id=%s asignado=%s avanzado=%s total=%s<br />", $child['Asignacione']['id'], $child['Asignacione']['porcentaje_asignado'], $child['Asignacione']['progreso'], $porcentaje_avanzado);
			}
		} else {
			$porcentaje_avanzado = $this->getProgreso($asignacione);
		}
		return $porcentaje_avanzado;
	}

	public function getDiasDisponibles($asignacione) {
		$diff = strtotime($asignacione['Asignacione']['fecha_entrega']) - strtotime($asignacione['Asignacione']['fecha_asignacion']);
		$dias_disponibles = floor($diff / (60*60*24));
		if ($dias_disponibles < 1) {
			$dias_disponibles = 1;
		}

		return $dias_disponibles;
	}

	public function getDiasTranscurridos($asignacione) {
		$diff = strtotime($asignacione['Asignacione']['fecha_entrega']) - strtotime(date('Y-m-d'));
		return floor($diff / (60*60*24));
	}

	public function getProgresoTiempo($asignacione) {
		$dias_transcurridos = $this->getDiasTranscurridos($asignacione);
		$dias_disponibles = $this->getDiasDisponibles($asignacione);

		$progreso_tiempo = 100 - ($dias_transcurridos * 100 / $dias_disponibles);
		if ($progreso_tiempo > 100) {
			$progreso_tiempo = 100;
		}

		return $progreso_tiempo;
	}

	public function getProgreso($asignacione) {
		$options['conditions'] = array(
			'Avance.asignacione_id' => $asignacione['Asignacione']['id']
		);
		$options['order'] = array(
			'Avance.id DESC'
		);
		$avance = $this->Avance->find('first', $options);
		return (isset($avance['Avance']['porcentaje_avanzado'])) ? $avance['Avance']['porcentaje_avanzado'] : 0;
	}

	public function updateProgresos(&$asignacione) {
		$asignacione['Asignacione']['progreso_tiempo'] = $this->getProgresoTiempo($asignacione);
		if ($asignacione['Asignacione']['parent_id']) {
			$asignacione['Asignacione']['progreso_fisico'] = 0;
			$asignacione['Asignacione']['progreso'] = $this->getProgreso($asignacione);
		} else {
			$asignacione['Asignacione']['progreso_fisico'] = $this->getProgresoFisico($asignacione);
			$asignacione['Asignacione']['progreso'] = 0;
		}

		$this->save($asignacione);
	}
}
