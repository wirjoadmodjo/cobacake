<?php
namespace App\Controller;

class TestController extends AppController
{
	public function initialize()
	{
		// ....
		$this->viewBuilder()->layout('AdminLTE.home');
		//...
	}
	
	public function index()
	{
		$this->set('content', 'hello');
		
	}
}