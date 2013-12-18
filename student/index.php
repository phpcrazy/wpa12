<?php 

define('DD', __DIR__);

require DD . '/helpers/Config.php';
require DD . '/controllers/HomeController.php';

$home = new HomeController;
$home->actionHome();

/*
function getConfig($key) {
	$config = require DD . "/config/config.php";
	return $config[$key];	
}
*/
// $home = new HomeController;
// $home->actionHome();
/*
$site_title = Config::get('site_title');
echo $site_title;

class Config {
	public static function get($key) {
		$config = require DD . '/config/config.php';
		return $config[$key];
	}
}
*/



 ?>