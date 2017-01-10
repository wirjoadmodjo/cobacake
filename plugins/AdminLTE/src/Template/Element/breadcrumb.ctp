<h1>
	<?= $_breadcrumb['title'] ?> <small><?= $_breadcrumb['small'] ?></small>
</h1>
<ol class="breadcrumb">
	<li><a href="<?= $this->Url->build('/') ?>"><i class="fa fa-home"></i>
			Home</a></li>
	<?php
	foreach ( $_breadcrumb ['link'] as $item ) {
		if ($item == end ( $_breadcrumb ['link'] )) {
			echo '<li class="active">' . $item ['title'] . '</li>';
		} else {
			echo '<li><a href="' . $item ['url'] . '">' . $item ['title'] . '</a></li>';
		}
	}
	?>
</ol>