<?php
require 'environment.php';
global $config;
$config = array();
if(ENVIRONMENT == "development"){
    $config['dbname'] = 'galeria';
    $config['host']   = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'conejo74';
} else {
    $config['dbname'] = 'galeria';
    $config['host']   = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'conejo24';
}
