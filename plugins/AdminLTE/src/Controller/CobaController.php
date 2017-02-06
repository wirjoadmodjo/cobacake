<?php
namespace AdminLTE\Controller;

use Cake\View\View;
use AdminLTE\Controller\AppController;
use AdminLTE\View\AdminLTE;

/**
 * Coba Controller
 *
 * @property \AdminLTE\Model\Table\CobaTable $Coba
 */
class CobaController extends AppController
{

    public $page;
	
	public function initialize()
    {
    	$this->page['title'] = 'CakeLTE | Coba';
    	$this->page['script'] = array('AdminLTE.app.min','AdminLTE.demo');
    }
	
    public function index()
    {
    	$_link[0]['title'] = 'Examples';
    	$_link[0]['url'] = '#';
    	$_link[1]['title'] = 'Coba page';
    	
    	$_breadcrumb = array (
    			'title' => 'Coba page',
    			'small' => 'it all starts here'
    	);
    	
    	$this->page['layout'] = 'AdminLTE.fix';
    	
    	$lte = new AdminLTE();
    	$lte->setBreadcrumb($_breadcrumb, $_link);
    	$this->set('page', $this->page);
    	
    	$box = array('size' => 4, 
    			'color' => 'maroon',
    			'icon' => 'fa-envelope-o'
    		);
    	$data = array('title' => 'Message', 'data' => '1,410');
    	$lte->setInfoBox('AdminLTE./infobox/type1', $box, $data);
    	$this->set('content', $lte->renderContent());
    }

    
}
