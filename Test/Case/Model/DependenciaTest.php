<?php
App::uses('Dependencia', 'Model');

/**
 * Dependencia Test Case
 *
 */
class DependenciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dependencia',
		'app.asignacione',
		'app.user',
		'app.group',
		'app.evaluacione',
		'app.mensaje',
		'app.avance',
		'app.sistema',
		'app.sistemas_user',
		'app.adjunto',
		'app.correccione',
		'app.dependencias_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dependencia = ClassRegistry::init('Dependencia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dependencia);

		parent::tearDown();
	}

}
