<?php
use Phalcon\Db\Adapter\Pdo\Mysql as Mysql;
use Phalcon\Di\FactoryDefault;

$di = new FactoryDefault();
$di['db'] = function() use ($config) {
return new Mysql(array(
    "host"     => (string)$config->database->host,
    "dbname"   => $config->database->dbname,
    "port"     => $config->database->port,
    "username" => $config->database->username,
    "password" => (string)$config->database->password,
    ));
};