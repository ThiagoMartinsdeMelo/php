<?php
require 'environment.php';

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'tarefas';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = '';
	$config['host'] = '';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}
?>