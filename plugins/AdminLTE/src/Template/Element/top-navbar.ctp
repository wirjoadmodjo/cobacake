<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
	<ul class="nav navbar-nav">
		<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
		<li><a href="#">Link</a></li>
		<li class="dropdown"><a href="#" class="dropdown-toggle"
			data-toggle="dropdown">Dropdown <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
				<li class="divider"></li>
				<li><a href="#">One more separated link</a></li>
			</ul></li>
	</ul>
	<?= ($element['top-search']) ? $this->element('navbar/top-search') : ''; ?>
</div>
<!-- /.navbar-collapse -->
<!-- Navbar Right Menu -->
<div class="navbar-custom-menu">
	<ul class="nav navbar-nav">
		<!-- Messages: style can be found in dropdown.less-->
		<?= ($element['message']) ? $this->element('navbar/message') : ''; ?>
		<!-- /.messages-menu -->
		<!-- Notifications Menu -->
		<?= ($element['notif']) ? $this->element('navbar/notif') : ''; ?>
		<!-- Tasks Menu -->
		<?= ($element['task']) ? $this->element('navbar/task') : ''; ?>
		<!-- User Account Menu -->
		<?= ($element['user']) ? $this->element('navbar/user') : ''; ?>
	</ul>
</div>
<!-- /.navbar-custom-menu -->