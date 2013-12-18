<?php 
// require DD . "/controller/Controller.php";

function autoloadController($classname) {
	$filename = DD . "/controller/" . $classname . ".php";
	if(is_readable($filename)) {
		require $filename;
	} else {
		trigger_error('Your file is not readable', E_USER_ERROR);
	}	
	
}

function autoloadModel($classname) {
	$filename = DD . "/models/" . $classname . ".php";
	if(is_readable($filename)) {
		require $filename;
	}	
}

spl_autoload_register('autoloadController');
spl_autoload_register('autoloadModel');
?>