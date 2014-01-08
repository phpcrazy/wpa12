<?php 

class HTML {
	public static function style($css) {
		$file = DD . '/public/' . $css;
		if(file_exists($file)) {
			$output = '<link rel="stylesheet" href="';
			$output .= base_url() . '/';
			$output .= $css;
			$output .= '">';
			return $output . "\n";
		} else {
			trigger_error('Your css file ' . $css . ' does not exist.');
		}
	}
}

 ?>