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
		'app.asignacione',
		'app.asignador',
		'app.responsable',
		'app.adjunto',
		'app.evaluacione'
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
