<?php
use Cake\Core\Configure;

Configure::write('Theme', [
    'title' => 'CakeLTE',
    'logo' => [
        'mini' => '<b>A</b>LT',
        'large' => '<b>Cake</b>LTE'
    ],
    'eSidebar' => [
        'search-form' => false,
        'user-panel' => false
    ],
    'eNavbar' => [
        'message' => true,
        'notif' => true,
        'task' => true,
        'user' => true,
        'top-search' => true,
        'control-sidebar' => true
    ],
    'login' => [
        'show_remember' => true,
        'show_register' => true,
        'show_social' => true
    ],
    'folder' => ROOT
]);
