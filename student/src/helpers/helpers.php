<?php 

function arrayResolver($key, $default_array) {
	$key = explode('.', $key);
	foreach ($key as $k => $val) {		
		$default_array = $default_array[$val];
	}
	return $default_array;
}
?>