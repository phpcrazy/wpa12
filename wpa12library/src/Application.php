<?php 
require DD . "/controller/Controller.php";

function __autoload($classname) {
	require DD . '/controller/' . $classname . '.php';
}
?>