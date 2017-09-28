<?php
use Phalcon\Loader;
require_once(APP_PATH."vendor/autoload.php");
$loader = new Loader();
$loader->registerDirs(
    [
        APP_PATH.$config->phalcon->controllersDir,
        APP_PATH.$config->phalcon->modelsDir
    ]
);
$loader->registerNamespaces(
    [
       "app\Libs\Fileconverter"    => APP_PATH."app/Libs/Fileconverter/",
    ]
);


$loader->register();