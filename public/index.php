<?php
use Phalcon\Mvc\Micro;
use Phalcon\Config\Adapter\Ini as IniConfig;

define('APP_PATH', realpath('') . '/../');

//Read the configuration
$config = new Phalcon\Config\Adapter\Ini(APP_PATH . 'app/config/config.ini');
require_once(APP_PATH . 'app/config/loader.php');
require_once(APP_PATH . 'app/config/database.php');
$app = new Micro();
require_once(APP_PATH . 'app/config/routes.php');
$app->handle();