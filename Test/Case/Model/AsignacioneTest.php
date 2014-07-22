<?php
App::uses('Asignacione', 'Model');

/**
 * Asignacione Test Case
 *
 */
class AsignacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.asignacione',
		'app.asignador',
		'app.responsable',
		'app.adjunto',
		'app.correccione',
		'app.evaluacione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Asignacione = ClassRegistry::init('Asignacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Asignacione);

		parent::tearDown();
	}

}
