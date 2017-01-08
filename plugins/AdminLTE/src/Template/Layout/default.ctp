<!DOCTYPE html>
<html>
<head>
<?= $this->Html->charset('utf-8'); ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 2 | Dashboard</title>
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
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a
				href="<?=$this->Url->build ( [ "controller" => "Pages","action" => "index" ] );?>"
				class="logo"> <!-- mini logo for sidebar mini 50x50 pixels --> <span
				class="logo-mini"><b>A</b>LT</span> <!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Admin</b>LTE</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<?= $this->element('nav-bar'); ?>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<?= $this->element('aside-main-sidebar'); ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->Flash->render('auth'); ?>
			<?php echo $this->fetch('content'); ?>			
		</div>
		<!-- /.content-wrapper -->
		<?= $this->element('footer'); ?>

		<!-- Control Sidebar -->
		<?= $this->element('aside-control-sidebar'); ?>
		<!-- /.control-sidebar -->
		<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->

	<!-- jQuery 2.2.3 -->
	<?= $this->Html->script('/lib/jQuery/jquery.min'); ?>
	<!-- jQuery UI 1.11.4 -->
	<?= $this->Html->script('/lib/jQueryUI/jquery-ui.min'); ?>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>$.widget.bridge('uibutton', $.ui.button);</script>
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
	<script type="text/javascript"> 
		$(document).ready(function(){
			$(".navbar .menu").slimscroll({
				height: "200px",
				alwaysVisible: false,
				size: "3px"
			}).css("width", "100%");
			var a = $('a[href="<?php echo $this->request->webroot . $this->request->url ?>"]');
			if (!a.parent().hasClass('treeview')) { 
				a.parent().addClass('active').parents('.treeview').addClass('active'); 
			}
		}); 
	</script>
</body>
</html>
