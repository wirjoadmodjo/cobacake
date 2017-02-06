<?php
namespace AdminLTE\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Breadcrumb helper
 */
class BreadcrumbHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    
    /* lokasi element breadcrumb */
    private $path = 'AdminLTE.breadcrumb';
    
    
    /*	function untuk set path element breadcrumb */    
    public function setPath($__path) {
    	$this->path = $__path;
    }
    
    
    /*	function untuk render element breadcrumb menjadi string
     * 	@$__tittle['title'] = string title halaman
     * 	@$__title['small'] = string title tambahan
     * 	@$__link = array yang akan menyimpan link breadcrumb
     * 		contoh:
     * 		$__link[0]['title'] = "Examples";
     * 		$__link[0]['url'] = "#";
     * 		$__link[1]['title'] = "Blank Page";
     * 		$__link[1]['url'] = "#";
     */
    public function getBreadcrumb($__title, $__link) {
    	$arBreadcrumb = array (
    			'title' => $__title['title'],
    			'small' => $__title['small'],
    			'link' => $__link
    	);
    	
    	return $this->_View->element($this->path,['breadcrumb' => $arBreadcrumb]);
    }
}
