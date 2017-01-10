<nav class="navbar navbar-static-top">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> 
		<span class="sr-only">Toggle navigation</span>
	</a>

	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<!-- Messages: style can be found in dropdown.less-->
			<?= ($element['message']) ? $this->element('navbar/message') : ''; ?>
			<!-- Notifications: style can be found in dropdown.less -->
			<?= ($element['notif']) ? $this->element('navbar/notif') : ''; ?>
			<!-- Tasks: style can be found in dropdown.less -->
			<?= ($element['task']) ? $this->element('navbar/task') : ''; ?>
			<!-- User Account: style can be found in dropdown.less -->
			<?= ($element['user']) ? $this->element('navbar/user') : ''; ?>
			<!-- Control Sidebar Toggle Button -->
			<?= ($element['control-sidebar']) ? '<li><a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a></li>' : ''; ?>			
		</ul>
	</div>
</nav>

