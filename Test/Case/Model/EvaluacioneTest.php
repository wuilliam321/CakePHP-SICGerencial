<?php
App::uses('Evaluacione', 'Model');

/**
 * Evaluacione Test Case
 *
 */
class EvaluacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evaluacione',
		'app.asignacione',
		'app.asignador',
		'app.responsable',
		'app.adjunto',
		'app.correccione',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Evaluacione = ClassRegistry::init('Evaluacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Evaluacione);

		parent::tearDown();
	}

}
