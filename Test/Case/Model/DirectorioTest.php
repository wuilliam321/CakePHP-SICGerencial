<?php
App::uses('Directorio', 'Model');

/**
 * Directorio Test Case
 *
 */
class DirectorioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.sistemas_user',
		'app.punto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Directorio = ClassRegistry::init('Directorio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Directorio);

		parent::tearDown();
	}

}
