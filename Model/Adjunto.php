<?php
App::uses('AppModel', 'Model');
/**
 * Adjunto Model
 *
 * @property Asignacione $Asignacione
 */
class Adjunto extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'ruta';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Asignacione' => array(
			'className' => 'Asignacione',
			'foreignKey' => 'asignacione_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
