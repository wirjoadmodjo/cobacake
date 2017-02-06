<?php
/*************************************************************************
 * @author		wirjoadmodjo@gmail.com
 * @name 		AdminLTE Template Layout TOP
 * @version 	0.1
 * @since		2017-02-04
 * @category	CakePHP Template Layout ctp
 * @desc			AdminLTE top layout dalam bentuk CakePHP ctp
 * @copyright	MIT
 * thanks to 	https://github.com/maiconpinto/cakephp-adminlte-theme
 ************************************************************************/

use Cake\Core\Configure;
$theme = Configure::read('Theme');
?>
<!DOCTYPE html>
<html>
<head>
<?= $this->Html->charset('utf-8'); ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?= isset($theme['title']) ? $theme['title'] : 'CakePHP - AdminLTE | Top Layout'; ?></title>
<!-- Tell the browser to be responsive to screen width -->
<meta
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
	name="viewport">
<!-- Bootstrap 3.3.7 -->
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
						<a href="<?= $this->Url->build('/'); ?>" class="navbar-brand"><b>Admin</b>LTE</a>
						<button type="button" class="navbar-toggle collapsed"
							data-toggle="collapse" data-target="#navbar-collapse">
							<i class="fa fa-bars"></i>
						</button>
					</div>

					<?= $this->element('top-navbar', ['element' => $theme['eNavbar']]) ?>
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
		<?= $this->element('footer') ?>
	</div>
	<!-- ./wrapper -->

	<!-- jQuery 2.2.4 -->
	<?= $this->Html->script('/lib/jQuery/jquery-2.2.4.min'); ?>
	<!-- Bootstrap 3.3.7 -->
	<?= $this->Html->script('/lib/bootstrap/js/bootstrap.min'); ?>
	<!-- SlimScroll -->
	<?= $this->Html->script('/lib/slimScroll/jquery.slimscroll.min'); ?>
	<!-- FastClick -->
	<?= $this->Html->script('/lib/fastclick/fastclick'); ?>
	<!-- include script lainnya -->
	<?= $this->fetch('script'); ?>
	<?= $this->fetch('scriptBottom'); ?>
	<!-- script lainnya -->
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
