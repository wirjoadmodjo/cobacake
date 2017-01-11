<?php
$this->layout = 'AdminLTE.collapsed';

$_link[0]['title'] = 'Examples';
$_link[0]['url'] = '#';
$_link[1]['title'] = 'Collapsed Sidebar';

$_breadcrumb = array(
    'title' => 'Sidebar Collapsed',
    'small' => 'Layout with collapsed sidebar on load',
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

		<p>Add the sidebar-collapse class to the body tag to get this layout.
			You should combine this option with a fixed layout if you have a long
			sidebar. Doing that will prevent your page content from getting
			stretched vertically.</p>
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