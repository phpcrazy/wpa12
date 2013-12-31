<?php 
class Config {
	public static function get($key) {
		$config = require DD . "/app/config/config.php";
		$data = arrayResolver($key, $config);
		return $data;
	}
}

?>