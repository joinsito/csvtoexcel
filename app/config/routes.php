<?php
use Phalcon\Mvc\Micro\Collection as MicroCollection;

$exports = new MicroCollection();

// Set the main handler. ie. a controller instance
$exports->setHandler(new ExportsController());

// Set a common prefix for all routes
$exports->setPrefix('/');
$exports->post('/', 'addFile');
$exports->get('/', 'getFiles');
$exports->get('{id}', 'showFileInfo');

$app->mount($exports);