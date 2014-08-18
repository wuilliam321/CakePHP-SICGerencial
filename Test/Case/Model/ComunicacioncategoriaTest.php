<?php
App::uses('Comunicacioncategoria', 'Model');

/**
 * Comunicacioncategoria Test Case
 *
 */
class ComunicacioncategoriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comunicacioncategoria',
		'app.dependencia',
		'app.asignacione',
		'app.user',
		'app.group',
		'app.evaluacione',
		'app.mensaje',
		'app.avance',
		'app.attachment',
		'app.comunicacione',
		'app.correccione',
		'app.comunicaciones_user',
		'app.directorio',
		'app.punto',
		'app.directorios_user',
		'app.sistema',
		'app.sistemas_user',
		'app.dependencias_user',
		'app.asignaciones_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Comunicacioncategoria = ClassRegistry::init('Comunicacioncategoria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Comunicacioncategoria);

		parent::tearDown();
	}

}
