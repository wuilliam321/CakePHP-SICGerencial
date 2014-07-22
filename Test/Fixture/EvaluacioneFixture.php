<?php
/**
 * EvaluacioneFixture
 *
 */
class EvaluacioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'asignacione_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'evaluacion' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'entrega_temprana' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_asignacionevaluaciones_asignaciones1_idx' => array('column' => 'asignacione_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'asignacione_id' => 1,
			'user_id' => 1,
			'evaluacion' => 1,
			'entrega_temprana' => 1
		),
	);

}
