<?php
$this->layout = 'AdminLTE.default';

$_link[0]['title'] = 'Examples';
$_link[0]['url'] = '#';
$_link[1]['title'] = 'Blank page';

$_breadcrumb = array (
    'title' => 'Blank page',
    'small' => 'it all starts here',
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