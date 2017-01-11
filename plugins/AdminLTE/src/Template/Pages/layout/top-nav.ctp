<?php
$this->layout = 'AdminLTE.top';

$_link[0]['title'] = 'Layout';
$_link[0]['url'] = '#';
$_link[1]['title'] = 'Top Navigation';

$_breadcrumb = array(
    'title' => 'Top Navigation',
    'small' => 'Examples 2.0',
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

		<p>Add the layout-top-nav class to the body tag to get this layout.
			This feature can also be used with a sidebar! So use this class if
			you want to remove the custom dropdown menus from the navbar and use
			regular links instead.</p>
	</div>
	<div class="callout callout-danger">
		<h4>Warning!</h4>

		<p>The construction of this layout differs from the normal one. In
			other words, the HTML markup of the navbar and the content will
			slightly differ than that of the normal layout.</p>
	</div>
	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Blank Box</h3>
		</div>
		<div class="box-body">The great content goes here</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
</section>
<!-- /.content -->