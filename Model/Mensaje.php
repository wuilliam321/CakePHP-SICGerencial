<?php
App::uses('AppModel', 'Model');
/**
 * Mensaje Model
 *
 * @property Enviador $Enviador
 * @property Receptor $Receptor
 * @property Mensaje $ParentMensaje
 * @property Mensaje $ChildMensaje
 */
class Mensaje extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';
	public $actsAs = array('Tree');

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'enviador_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'receptor_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'texto' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
		'Enviador' => array(
			'className' => 'User',
			'foreignKey' => 'enviador_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Receptor' => array(
			'className' => 'User',
			'foreignKey' => 'receptor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ParentMensaje' => array(
			'className' => 'Mensaje',
			'foreignKey' => 'parent_id',
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
		'ChildMensaje' => array(
			'className' => 'Mensaje',
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
		)
	);

}
