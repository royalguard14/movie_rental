<?php
include_once('config.php');
include_once('Connection.php');
spl_autoload_register(function($class){
if (file_exists('Controllers'.$class.'.php')) {
	require 'Controllers'.$class.'.php';
}
if (file_exists('Models'.$class.'.php')) {
	require 'Models'.$class.'.php';
}
});

$db = Connection::connect($config);