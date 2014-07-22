<?php
App::uses('AsignacionesUser', 'Model');

/**
 * AsignacionesUser Test Case
 *
 */
class AsignacionesUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.asignaciones_user',
		'app.user',
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
		$this->AsignacionesUser = ClassRegistry::init('AsignacionesUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AsignacionesUser);

		parent::tearDown();
	}

}
