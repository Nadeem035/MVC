<?php
/*
 * Description: 
 * Version: 
 * Author: 
 * Author URL: 
 */
$GLOBALS['MVC']  = array();
// CamelCase
// pascalCase
// lowercase
// Set directory paths
define('PUBLIC_PATH', str_replace('\\', '/', dirname(__FILE__)));
define('ROOT_PATH', rtrim(PUBLIC_PATH, 'public'));

// add all load file
require_once(ROOT_PATH.'app/config/constants.php');
require_once(APP_PATH.'config/config.php');
require_once(APP_PATH.'helpers/common.php');

// Parse Incoming request
list($controller, $method, $arguments) = parseRequest();
// Reset controller name
$controller = 'CL_'.trim(ucfirst(strtolower($controller)));
$method = trim(strtolower($method));
//
spl_autoload_register('mvcAutoLoader');
//
$obj = new $controller;
//
if(in_array($method, get_class_methods($controller))){
	$obj->$method(...$arguments);
}else{
	$obj->all(...$arguments);
}

// _e($controller);
// _e($method);
// _e($arguments);
// // die('Pinged here');