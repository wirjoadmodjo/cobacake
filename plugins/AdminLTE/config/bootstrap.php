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
        'message' => false,
        'notif' => false,
        'task' => false,
        'user' => false
    ],
    'login' => [
        'show_remember' => true,
        'show_register' => true,
        'show_social' => true
    ],
    'folder' => ROOT
]);
