<?php
namespace AdminLTE\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/************************************************************************* 
 * @author		wirjoadmodjo@gmail.com
 * @name 		AdminLTE View Helper WidgetHelper
 * @version 	0.1
 * @since		2017-02-04
 * @category	CakePHP VIew Helper Class	
 * @desc			class ini sebagai wrapper html helper dari widget AdminLTE
 * @copyright	MIT
 * thanks to 	https://github.com/maiconpinto/cakephp-adminlte-theme
 * 
 * @changelog
 * 	0.1	2017-02-04	init version
 ************************************************************************/
class WidgetHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    
    
    private $path;
    
    
    public function setPath($__path) 
    {
    	$this->path = $__path;
    }
    
    
    /*	function ini akan merender element infobox
     * 	$__type = number type infobox contoh (1,2,3);
     * 	$__data['size'] = 2,3,4,6
     * 	$__data['color'] = lightBlue, red, green, aqua, yellow, blue,
     * 		navy, teal, olive, lime, orange, fuchsia, purple, maroon, black,gray
     * 	$__data['icon'] = bisa dilihat di dokumentasi font-awesome ionicons
     * 		contoh: fa-envelope-o
     * 	
     * 	$__data['title'] = text pada infobox
     * 	$__data['data'] = data/angka di infobox 
     **/
    public function infoBox($__type, $__data)
    {
    	return $this->_View->element($this->path,['type' => $__type,'box' => $__data]);
    }
    
    
    public function box()
    {
    	
    }

}
