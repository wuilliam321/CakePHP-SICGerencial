<?php
/**
 * AsignacioneFixture
 *
 */
class AsignacioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'asignador_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'responsable_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'titulo' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'detalles' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_asignacion' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'fecha_entrega' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'tipo' => array('type' => 'string', 'null' => false, 'default' => 'C', 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'asignador_id' => 1,
			'responsable_id' => 1,
			'titulo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'detalles' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'fecha_asignacion' => '2014-07-22 09:42:47',
			'fecha_entrega' => '2014-07-22 09:42:47',
			'tipo' => 'Lorem ipsum dolor sit ame',
			'parent_id' => 1,
			'lft' => 1,
			'rght' => 1,
			'created' => '2014-07-22 09:42:47',
			'modified' => '2014-07-22 09:42:47'
		),
	);

}
