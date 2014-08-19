<?php
App::uses('AppController', 'Controller');
/**
 * Resumen Controller
 *
 * @property Resumen $Resumen
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ResumenController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	public $uses = array();

/**
 * index method
 *
 * @return void
 */
	public function index() {
	}
}
