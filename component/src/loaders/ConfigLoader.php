<?php 
class Config {
	public static function get($key) {
		$config = require DD . "/app/config/config.php";
		$data = arrayResolver($key, $config);
		return $data;
	}

	public static function database($key) {
		$database = require DD . '/app/config/database.php';
		$data = arrayResolver($key, $database);
		return $data;
	}
}

?>