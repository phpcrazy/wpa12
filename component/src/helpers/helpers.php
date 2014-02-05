<?php 

function arrayResolver($key, $default_array) {
	$key = explode('.', $key);
	foreach ($key as $k => $val) {		
		$default_array = $default_array[$val];
	}
	return $default_array;
}

function get_layout($view) {
	$file = DD . "/app/views/" . $view . ".php";
	if(file_exists($file)) {
		require $file;
	} else {
		trigger_error('Your file ' . $view . ' does not exist', E_USER_ERROR);
	}
}

function base_url(){
	return Config::get('base_url');
}

function site_title(){
	return Config::get('site_title');
}
?>