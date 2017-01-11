<?php
$this->layout = 'AdminLTE.box';

$_link[0]['title'] = 'Layout';
$_link[0]['url'] = '#';
$_link[1]['title'] = 'Boxed';

$_breadcrumb = array(
    'title' => 'Boxed Layout',
    'small' => 'Blank example to the boxed layout',
    'link' => $_link
);

$this->Html->script([
    'AdminLTE.app.min',
    'AdminLTE.demo'
], [
    'block' => 'script'
]);
?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<?= $this->element('breadcrumb', ['breadcrumb' => $_breadcrumb]); ?>
</section>

<!-- Main content -->
<section class="content">
	<div class="callout callout-info">
		<h4>Tip!</h4>

		<p>Add the layout-boxed class to the body tag to get this layout. The
			boxed layout is helpful when working on large screens because it
			prevents the site from stretching very wide.</p>
	</div>
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
</section>
<!-- /.content -->