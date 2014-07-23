<?php
App::uses('Avance', 'Model');

/**
 * Avance Test Case
 *
 */
class AvanceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.avance',
		'app.asignacione',
		'app.user',
		'app.group',
		'app.evaluacione',
		'app.mensaje',
		'app.sistema',
		'app.sistemas_user',
		'app.adjunto',
		'app.correccione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Avance = ClassRegistry::init('Avance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Avance);

		parent::tearDown();
	}

}
