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
	public static function script($js) {
		$file = DD . '/public/' . $js;
		if(file_exists($file)) {
			$output = ' <script src="';
			$output .= base_url() . '/';
			$output .= $js;
			$output .= '"></script>';
			return $output . "\n";
		} else {
			trigger_error('Your js file ' . $js . ' does not exist.');
		}
	}
}

 ?>