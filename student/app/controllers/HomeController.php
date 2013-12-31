<?php 

class HomeController {
	public function actionHome() {
		$site_title = Config::get('site_title');
		require DD . '/views/home.php';
	}
}

 ?>