<nav class="navbar navbar-static-top">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="offcanvas"
		role="button"> <span class="sr-only">Toggle navigation</span>
	</a>

	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<!-- Messages: style can be found in dropdown.less-->
			<?= $this->element('nav-bar/message'); ?>
			<!-- Notifications: style can be found in dropdown.less -->
			<?= $this->element('nav-bar/notif'); ?>
			<!-- Tasks: style can be found in dropdown.less -->
			<?= $this->element('nav-bar/task'); ?>
			<!-- User Account: style can be found in dropdown.less -->
			<?= $this->element('nav-bar/user'); ?>
			<!-- Control Sidebar Toggle Button -->
			<li><a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a></li>
		</ul>
	</div>
</nav>