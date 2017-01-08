<?php

namespace AdminLTE\Controller;

use AdminLTE\Controller\AppController;

/**
 * Pages Controller
 *
 * @property \AdminLTE\Model\Table\PagesTable $Pages
 */
class PagesController extends AppController {
	public function initialize() {
		// ....
		$this->viewBuilder ()->layout ( 'AdminLTE.default' );
		// ...
	}
	public function index($_pages = "") {
		return $this->redirect ( [ 
				'controller' => 'Pages',
				'action' => 'home' 
		] );
	}
	public function home() {
		
		
	}
}
