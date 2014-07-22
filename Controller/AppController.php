<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array(
		// 'DebugKit.Toolbar',
		'Acl',
		'Auth' => array(
			'authenticate' => array(
				'Form' => array(
					'passwordHasher' => array(
						'className' => 'Simple',
						'hashType' => 'md5'
					)
				)
			),
			'authorize' => array(
				'Actions' => array('actionPath' => 'controllers')
			),
			'authError' => '<div id="custom-flash" class="success fg-white bg-red"><i class="icon-locked on-right on-left bg-white fg-red" style="padding: 10px;border-radius: 50%"></i>No tiene permisos para realizar esa operación</div>'
		),
		'Session'
	);
	public $helpers = array('Html', 'Form', 'Session');

	public function beforeFilter() {
		//Configure AuthComponent
		$this->Auth->authenticate = array(
			'Ldap'
		);
		$this->Auth->loginAction = array(
			'controller' => 'users',
			'action' => 'login'
		);
		$this->Auth->logoutRedirect = array(
			'controller' => 'users',
			'action' => 'login'
		);
		$this->Auth->loginRedirect = array(
			'controller' => 'asignaciones',
			'action' => 'index'
		);
		$this->Auth->allow(array('pages' => 'display'));
	}
}