<?php

define('DD', __DIR__ . '/../'); 
require DD . '/vendor/autoload.php';

/* $sitetitle = Config::get('site_title');
echo $sitetitle . "<br />";
$foobar = Config::get('foo.bar.moo');
echo $foobar;*/

$data['site_title']	= Config::get('site_title');
$page = isset($_GET['page']) ? $_GET['page'] : '';
if($page == 'all-students') {
	$data['students'] = Student::all();
	View::make('all-students', $data);
} elseif($page=='detail') {
	$data['students'] = Student::get($_GET['id']);
	View::make('detail', $data);
} else {
	View::make('home', $data);
}





?>