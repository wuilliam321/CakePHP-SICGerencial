<?php
App::uses('Comunicacione', 'Model');

/**
 * Comunicacione Test Case
 *
 */
class ComunicacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comunicacione',
		'app.remitente',
		'app.correccione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Comunicacione = ClassRegistry::init('Comunicacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Comunicacione);

		parent::tearDown();
	}

}
