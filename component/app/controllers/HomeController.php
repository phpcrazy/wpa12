<?php 

class HomeController {
	public function actionHome() {
		$site_title = Config::get('site_title');
		return require DD . '/app/views/home.php';
	}
}

 ?>