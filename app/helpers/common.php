<?php

if(!function_exists('_e')){
	function _e($in){
		echo '<pre>';
		echo '*************'.'<br>';
		if(is_object($in)) var_dump($in);
		else if(is_array($in)) print_r($in);
		else echo($in);
		echo '<br>'.'*************';
		echo '</pre>';
	}
}


if(!function_exists('parseRequest')){
	function parseRequest(){
		$r = array(
			CONTROLLER,
			METHOD,
			array()
		);

		//
		if(!empty($_GET['request'])){
			// if(in_array($mrthod, get_class_methods('app'))
			$t = explode('/', rtrim($_GET['request'], '/'));
			$r[0] = $t[0];
			if(isset($t[1])) $r[1] = $t[1];
			if(isset($t[2])){
				unset(
					$t[0], 
					$t[1]
				);
				$r[2] = array_values($t);
			}

		}
		return $r;
	}
}


function mvcAutoLoader($cl){
	// _e($cl);
	switch (strtolower(substr($cl, 0, 2))) {
		case 'cl':
			$path = APP_PATH.'Controllers/';
			// $path = APP_PATH.'controllers/';
		break;
		case 'md':
			$path = APP_PATH.'models/';
		break;
		case 'lb':
			$path = APP_PATH.'libraries/';
		break;
	}
	//
	// ob_start();
	// _e($path.(strtolower(substr($cl, 3))).'.php');/
	// require_once($path.(strtolower(substr($cl, 3))).'.php');
	require_once($path.(strtolower(substr($cl, 3))).'.php');

	// _e(ob_get_contents());
}


function loadModal($modalName){
	$modalName = 'MD_'.$modalName;
	$GLOBALS['MVC'][$modalName] = new $modalName;
	return $GLOBALS['MVC'][$modalName];
}

function loadLibrary($modalName){
	$modalName = 'LB_'.$modalName;
	$GLOBALS['MVC'][$modalName] = new $modalName;
	return $GLOBALS['MVC'][$modalName];
}


function get_instance(){
	return $GLOBALS['MVC'];
}