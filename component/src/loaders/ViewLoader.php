<?php 

use Philo\Blade\Blade;

class View {

	public static function makeBlade($view, $data = null) {
		$views = DD . '/app/views';
		$cache = DD . '/app/cache';

		$blade = new Blade($views, $cache);
		ob_start();
		if($data != null) {
			echo $blade->view()->make($view);	
		} else {
			echo $blade->view()->make($view, $data);
		}
		return ob_get_clean();
		
	}

	public static function make($view, $data = null) {
		ob_start();
		if($data != null) {
			extract($data);
		}
		require DD . "/app/views/" . $view . ".php";
		ob_end_flush();
	}
}

 ?>