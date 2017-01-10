<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<?= ($element['user-panel']) ? $this->element('sidebar/user-panel') : ''; ?>
		<!-- search form -->
		<?= ($element['search-form']) ? $this->element('sidebar/search-form') : ''; ?>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<?= $this->element('sidebar/menu') ?>
	</section>
	<!-- /.sidebar -->
</aside>