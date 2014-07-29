<?php
App::uses('Correccione', 'Model');

/**
 * Correccione Test Case
 *
 */
class CorreccioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.correccione',
		'app.comunicacione',
		'app.user',
		'app.group',
		'app.evaluacione',
		'app.asignacione',
		'app.dependencia',
		'app.dependencias_user',
		'app.adjunto',
		'app.avance',
		'app.asignaciones_user',
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
		$this->Correccione = ClassRegistry::init('Correccione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Correccione);

		parent::tearDown();
	}

}
