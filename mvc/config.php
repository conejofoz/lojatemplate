<?php
require 'environment.php';
global $config;
$config = array();
if(ENVIRONMENT == "development"){
    define("BASE_URL", "http://localhost/pzp/mvc");
    $config['dbname'] = 'galeria';
    $config['host']   = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'conejo74';
} else {
	define("BASE_URL", "http://infinity-group.net/pzp/mvc");
    $config['dbname'] = 'infinitygroup';
    $config['host']   = 'mysql.infinity-group.net';
    $config['dbuser'] = 'infinitygroup';
    $config['dbpass'] = 'conejo24';
}
