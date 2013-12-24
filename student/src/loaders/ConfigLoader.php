<?php 
class Config {
	public static function get($key) {
		$config = require DD . "/src/config/config.php";
		$data = arrayResolver($key, $config);
		return $data;
	}
}

?>