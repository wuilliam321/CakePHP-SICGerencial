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
			'authError' => '<div class="error"><div class="message-box-wrap"><strong>Error</strong>! - No tiene permisos para realizar esa operación.</div></div>'
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
		
		$auth_user = $this->Session->read('Auth.User');
		$this->set(compact('auth_user'));
	}

	public function get_last_code($tipo) {
		$this->loadModel('Parametro');
		$tipos = array(
			'D' => 'contador_directorio',
			'C' => 'contador_comunicaciones',
			'A' => 'contador_asignaciones',
		);
		$nombre = $tipos[$tipo];

		$parametro = $this->Parametro->findByNombre($nombre);
		$valor = $parametro['Parametro']['valor'] + 1;
		return $tipo . sprintf('%09d', $valor);
	}

	public function increase_contador($tipo) {
		$this->loadModel('Parametro');
		$tipos = array(
			'D' => 'contador_directorio',
			'C' => 'contador_comunicaciones',
			'A' => 'contador_asignaciones',
		);
		$nombre = $tipos[$tipo];

		$parametro = $this->Parametro->findByNombre($nombre);
		$parametro['Parametro']['valor'] += 1;
		$this->Parametro->save($parametro);
	}

	public function decrease_contador($tipo) {
		$this->loadModel('Parametro');
		$tipos = array(
			'D' => 'contador_directorio',
			'C' => 'contador_comunicaciones',
			'A' => 'contador_asignaciones',
		);
		$nombre = $tipos[$tipo];

		$parametro = $this->Parametro->findByNombre($nombre);
		$parametro['Parametro']['valor'] -= 1;
		$this->Parametro->save($parametro);
	}

    public function download($id, $folder) {
		$this->loadModel('Attachment');
        $this->viewClass = 'Media';
        $attachment = $this->Attachment->findById($id);
        // Download app/outside_webroot_dir/example.zip
        $params = array(
            'id'        => $attachment['Attachment']['attachment'],
            'name'      => $attachment['Attachment']['name'],
            'download'  => true,
            'path'      => WEBROOT_DIR . DS . 'files/' . $folder . DS
        );
        $this->set($params);
    }
}
