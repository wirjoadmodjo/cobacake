<?php

$this->layout($page['layout']);
$this->assign('pageTitle', $page['title']);


$this->Html->script($page['script'], ['block' => 'script']);

echo $content;