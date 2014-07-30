<?php
App::uses('Punto', 'Model');

/**
 * Punto Test Case
 *
 */
class PuntoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.punto',
		'app.directorio',
		'app.user',
		'app.group',
		'app.evaluacione',
		'app.asignacione',
		'app.dependencia',
		'app.dependencias_user',
		'app.adjunto',
		'app.avance',
		'app.correccione',
		'app.comunicacione',
		'app.mensaje',
		'app.sistema',
		'app.sistemas_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Punto = ClassRegistry::init('Punto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Punto);

		parent::tearDown();
	}

}
