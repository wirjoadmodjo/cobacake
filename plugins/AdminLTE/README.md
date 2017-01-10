# AdminLTE plugin for CakePHP

terinspirasi dari https://github.com/maiconpinto/cakephp-adminlte-theme

## Catatan buat saya
	1. Aktivasi plugin
		```
		// config/bootstrap.php

		Plugin::load('AdminLTE', ['bootstrap' => true, 'routes' => true]);
		```
	2. Aktifkan theme
		```
		// src/Controller/AppController.php

		public function beforeRender(Event $event)
		{
    		$this->viewBuilder()->theme('AdminLTE');
		}
		```

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require your-name-here/AdminLTE
```
