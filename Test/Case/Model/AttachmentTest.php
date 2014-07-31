<?php
App::uses('Attachment', 'Model');

/**
 * Attachment Test Case
 *
 */
class AttachmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attachment',
		'app.comunicacione',
		'app.user',
		'app.group',
		'app.evaluacione',
		'app.asignacione',
		'app.dependencia',
		'app.dependencias_user',
		'app.adjunto',
		'app.avance',
		'app.mensaje',
		'app.sistema',
		'app.sistemas_user',
		'app.directorio',
		'app.punto',
		'app.directorios_user',
		'app.correccione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Attachment = ClassRegistry::init('Attachment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Attachment);

		parent::tearDown();
	}

}
