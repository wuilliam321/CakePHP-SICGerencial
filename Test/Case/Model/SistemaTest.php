<?php
App::uses('Sistema', 'Model');

/**
 * Sistema Test Case
 *
 */
class SistemaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sistema',
		'app.user',
		'app.group',
		'app.sistemas_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sistema = ClassRegistry::init('Sistema');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sistema);

		parent::tearDown();
	}

}
