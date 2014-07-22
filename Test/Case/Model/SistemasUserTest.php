<?php
App::uses('SistemasUser', 'Model');

/**
 * SistemasUser Test Case
 *
 */
class SistemasUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sistemas_user',
		'app.sistema',
		'app.user',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SistemasUser = ClassRegistry::init('SistemasUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SistemasUser);

		parent::tearDown();
	}

}
