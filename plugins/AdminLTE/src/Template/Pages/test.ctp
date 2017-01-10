<?php
$_link [0] ['title'] = 'Layout';
$_link [0] ['url'] = '#';
$_link [1] ['title'] = 'Top Navigation';

$breadcrumb = array (
		'title' => 'Dashboard',
		'small' => 'Control Panel',
		'link' => $_link 
);



?>



<h1>
	<?= $breadcrumb['title'] ?> <small><?= $breadcrumb['small'] ?></small>
</h1>
<ol class="breadcrumb">
	<li><a href="<?= $this->Url->build('/') ?>"><i class="fa fa-home"></i>
			Home</a></li>
	<?php
	foreach ( $breadcrumb ['link'] as $item ) {
		if ($item == end($breadcrumb['link'])) {
			echo '<li class="active">'.$item['title'].'</li>';
		} else {
			echo '<li><a href="'.$item['url'].'">'.$item['title'].'</a></li>';
		}
			
	}
	?>
</ol>