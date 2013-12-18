<?php 
class Config {
	public static function get($key) {
		$config = require DD . "/config/config.php";
		return $config[$key];
	}
}
 ?>