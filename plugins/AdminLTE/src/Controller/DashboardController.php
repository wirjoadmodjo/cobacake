<?php
namespace AdminLTE\Controller;

use AdminLTE\Controller\AppController;
use AdminLTE\View\AdminLTE;

/************************************************************************* 
 * @author		wirjoadmodjo@gmail.com
 * @name 		AdminLTE Controller	Dashboard
 * @version 	0.1
 * @since		2017-02-04
 * @category	CakePHP	Controller
 * @desc			Controller untuk menghandle halaman /adminlte/dashboard
 * @copyright	MIT
 ************************************************************************/
class DashboardController extends AppController
{

	public $page;

	public function initialize ()
	{
		// $this->page['title'] = 'CakeLTE | Coba';
		$this->page['script'] = array(
				'AdminLTE.app.min',
				'AdminLTE.demo',
				'AdminLTE.docs'
		);
	}

	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function index ()
	{
		
		// set breadcrumb properties
		$_link[0]['title'] = 'Dashboard';
		$_link[0]['url'] = '#';
		
		$_breadcrumb = array(
				'title' => 'Dashboard',
				'small' => 'Control Panel'
		);
		
		// set infobox properties
		$arBOX[0] = array(
				'size' => 3,
				'color' => 'aqua',
				'icon' => 'fa fa-shopping-cart',
				'title' => 'New Orders',
				'data' => '<h3>150</h3>',
				'link' => '#'
		);
		
		$arBOX[1] = array(
				'size' => 3,
				'color' => 'green',
				'icon' => 'ion ion-stats-bars',
				'title' => 'Bounce Rate',
				'data' => '<h3>53<sup style="font-size: 20px">%</sup></h3>',
				'link' => '#'
		);
		
		$arBOX[2] = array(
				'size' => 3,
				'color' => 'yellow',
				'icon' => 'ion ion-person-add',
				'title' => 'User Registrations',
				'data' => '<h3>44</h3>',
				'link' => '#'
		);
		
		$arBOX[3] = array(
				'size' => 3,
				'color' => 'red',
				'icon' => 'ion ion-pie-graph',
				'title' => 'Unique Visitors',
				'data' => '<h3>65</h3>',
				'link' => '#'
		);
		
		// set page title & layout
		$this->page['title'] = 'CakeLTE | Dashboard';
		$this->page['layout'] = 'AdminLTE.fix';
		
		$lte = new AdminLTE();
		$lte->setBreadcrumb($_breadcrumb, $_link);
		$this->set('page', $this->page);
		$content = "";
		
		// generate infobox
		$pathinfoBox = 'AdminLTE./widget/infobox';
		$temp = '<div class="row">';
		foreach ($arBOX as $box)
		{
			$temp = $temp . $lte->getInfoBox($pathinfoBox, 3, $box);
		}
		$temp = $temp . '</div>';
		
		// generate content
		$content = $content . $temp;
		$this->set('content', $lte->renderContent($content));
	}

	public function dua ()
	{
		$_link[0]['title'] = 'Dashboard';
		$_link[0]['url'] = '#';
		
		$_breadcrumb = array(
				'title' => 'Dashboard',
				'small' => 'Version 2.0'
		);
		
		$this->page['title'] = 'CakeLTE | Dashboard';
		$this->page['layout'] = 'AdminLTE.fix';
		
		$lte = new AdminLTE();
		$lte->setBreadcrumb($_breadcrumb, $_link);
		$this->set('page', $this->page);
		$this->set('content', $lte->renderContent());
	}
}
