<!DOCTYPE html>
<html>
<head>
<?= $this->Html->charset('utf-8'); ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?= isset($theme['title']) ? $theme['title'] : 'AdminLTE 2 | Top Navigation'; ?></title>
<!-- Tell the browser to be responsive to screen width -->
<meta
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
	name="viewport">
<!-- Bootstrap 3.3.6 -->
<?= $this->Html->css('/lib/bootstrap/css/bootstrap.min'); ?>
<!-- Font Awesome -->
<?= $this->Html->css('/lib/font-awesome/css/font-awesome.min'); ?>
<!-- Ionicons -->
<?= $this->Html->css('/lib/ionicons/css/ionicons.min'); ?>
<!-- Theme style -->
<?= $this->Html->css('AdminLTE.AdminLTE.min'); ?>
<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<?= $this->Html->css('AdminLTE.skins/_all-skins.min'); ?>
<!-- include css lainnya -->
<?= $this->fetch('css'); ?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">
		<header class="main-header">
			<nav class="navbar navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<a href="<?php echo $this->Url->build('/'); ?>"
							class="navbar-brand"><b>Admin</b>LTE</a>
						<button type="button" class="navbar-toggle collapsed"
							data-toggle="collapse" data-target="#navbar-collapse">
							<i class="fa fa-bars"></i>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse pull-left"
						id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Link <span
									class="sr-only">(current)</span></a></li>
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
						<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" id="navbar-search-input"
									placeholder="Search">
							</div>
						</form>
					</div>
					<!-- /.navbar-collapse -->
					<!-- Navbar Right Menu -->
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- Messages: style can be found in dropdown.less-->
							<?= $this->element('nav-bar/message'); ?>
							<!-- /.messages-menu -->

							<!-- Notifications Menu -->
							<?= $this->element('nav-bar/notif'); ?>
							<!-- Tasks Menu -->
							<?= $this->element('nav-bar/task'); ?>
							<!-- User Account Menu -->
							<?= $this->element('nav-bar/user'); ?>
						</ul>
					</div>
					<!-- /.navbar-custom-menu -->
				</div>
				<!-- /.container-fluid -->
			</nav>
		</header>

		<!-- Full Width Column -->
		<div class="content-wrapper">
			<div class="container">
				<?php echo $this->Flash->render(); ?>
				<?php echo $this->Flash->render('auth'); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
			<!-- /.container -->
		</div>
		<!-- /.content-wrapper -->

		<?php echo $this->element('footer'); ?>

	</div>



	<!-- ./wrapper -->

	<!-- jQuery 2.2.3 -->
	<?= $this->Html->script('/lib/jQuery/jquery.min'); ?>
	<!-- jQuery UI 1.11.4 -->
	<?= $this->Html->script('/lib/jQueryUI/jquery-ui.min'); ?>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.6 -->
	<?= $this->Html->script('/lib/bootstrap/js/bootstrap.min'); ?>
	<!-- Slimscroll -->
	<?= $this->Html->script('/lib/slimScroll/jquery.slimscroll.min'); ?>
	<!-- FastClick -->
	<?= $this->Html->script('/lib/fastclick/fastclick'); ?>
	<!-- AdminLTE App -->
	<?= $this->Html->script('AdminLTE.app.min'); ?>
	<!-- include js lainnya -->
	<?= $this->fetch('script'); ?>
</body>
</html>
