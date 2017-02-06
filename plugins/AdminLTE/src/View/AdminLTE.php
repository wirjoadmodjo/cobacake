<?php

namespace AdminLTE\View;

use Cake\View\View;


/************************************************************************* 
 * @author		wirjoadmodjo@gmail.com
 * @name 		AdminLTE View AdminLTE
 * @version 	0.1
 * @since		2017-02-04
 * @category	CakePHP View Class	
 * @desc			class ini akan mengenerate template AdminLTE
 * @copyright	MIT
 * thanks to 	https://github.com/maiconpinto/cakephp-adminlte-theme
 * 
 * @changelog
 * 	0.1	2017-02-04	init version
 ************************************************************************/
class AdminLTE extends View
{
	/*******************************************	
	 * @var	(string) pageLayout
	 * jenis layout untuk template AdminLTE
	 * 	default, fix, box, collapsed, dan top
	 ******************************************/	
	private $pageLayout = "default";
	
	
	/*	string variabel judul halaman */
	private $pageTitle;
	
	
	/*	array yang akan menyimpan propertis dari breadcrumb
	 * 	$_breadcrumb['title'] = 
	 * 	$_breadcrumb['small'] =
	 * 	$_breadcrumb['link'] = untuk mentimpan properties link breadcrumb
	 * 		contoh:
	 * 		$_breadcrumb['link'][0]['title'] = "Blank Page";
	 * 		$_breadcrumb['link'][0]['url'] = "#";
	 */
	private $breadcrumb;
	
	
	private $infoBox;
	
	
	private $content = "";
	
	
	/*	function untuk set layout template
	 * 	default, fix, box, collapsed, dan top
	 */
	public function setLayout($__layout)
	{
		$this->pageLayout = $__layout;
	}
	
	
	/*	function untuk mengambil nilai variabel _layout*/
	public function getLayout()
	{
		return $this->pageLayout;
	}
	
	/*	function untuk set Title Halaman */
	public function setPageTitle($__title)
	{
		$this->pageTitle = $__title;
	}
	
	
	/*	function untuk mengambil nilai variabel _pageTitle */
	public function getPageTitle()
	{
		return $this->pageTitle;
	}	
	
	
	/*	function ini digunakan untuk mengkonversi vew menjadi string
	 * 	agar bisa digunakan kembali di controller atau yang lainnya
	 * 
	 * 	@$_viewpath = element atau view yang akan di render
	 * 	@$_var = variabel yang akan di parsing
	 * 		$_var['name'] = nama variable
	 * 		$_var['value'] = nilai variable
	 * 
	 * 	return berupa string dari element atau view yang dirender 
	 */	
	private function view2string($__viewpath, $__var) 
	{
		$view = new View();
		$view->layout = null;
		$view->set($__var['name'], $__var['value']);
		$html = $view->render($__viewpath);
			
		return $html;
	}
	
	
	/*	function ini akan mengisi nilai variabel _breadcrumb
	 * 	dengan cara merender element breadcrumb (Element/breadcrumb.ctp)
	 * 	menjadi string kemudian disimpan dalam variabel _breadcrumb  
	 */	
	public function setBreadcrumb($__title, $__link)
	{
		$this->loadHelper('AdminLTE.Breadcrumb');
		$this->breadcrumb = $this->Breadcrumb->getBreadCrumb($__title, $__link);
	}
	
		
	public function getBreadcrumb()
	{
		return $this->breadcrumb;	
	}
	
	
	public function getInfoBox($__path, $__type, $__data) {
		$this->loadHelper('AdminLTE.Widget');
		$this->Widget->setPath($__path);
		
		return $this->Widget->infoBox($__type, $__data);
	}
	
	
	/*	function ini digunakan untuk merender content yang akan ditaruh 
	 * 	di blok content dari file layout 
	 */
	public function renderContent($__content="")
	{
		if ($__content == "") 
		{
			$this->content = '
				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Title</h3>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool"
								data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i>
							</button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"
								data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i>
							</button>
						</div>
					</div>
				<div class="box-body">Start creating your amazing application!</div>
				<!-- /.box-body -->
				<div class="box-footer">Footer</div>
				<!-- /.box-footer-->
				</div>
				<!-- /.box -->
			';
		}	else $this->content = $__content;
		
		return '
			<!-- Content Header (Page header) -->
			<section class="content-header">'.
				$this->breadcrumb.'
			</section>

			<!-- Main content -->
			<section class="content">'.
				$this->content . '
			</section>
			<!-- /.content -->';
	}
	
	
	public function test2string()
	{
		$view = new View();
		$view->layout = null;
		$view->set('input', "hello world");
		$html = $view->render('AdminLTE./Element/fooel');
			
		return $html;
	}
}