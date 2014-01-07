<?php

define('DD', __DIR__ . '/../'); 
require DD . '/vendor/autoload.php';

/* $sitetitle = Config::get('site_title');
echo $sitetitle . "<br />";
$foobar = Config::get('foo.bar.moo');
echo $foobar;*/

$data['site_title']	= Config::get('site_title');
$page = isset($_GET['page']) ? $_GET['page'] : '';
$page=htmlspecialchars($page);
if($page == 'all-students') {
	$data['students'] = Student::all();
	View::make('all-students', $data);
} elseif($page=='detail') {
	$data['students'] = Student::get(htmlspecialchars($_GET['id']));
	View::make('detail', $data);
}elseif($page=='php-foundation'){
	$page='PHP Foundation';
	$data['students']=Student::getClass($page);
	View::make('all-students',$data);
}elseif ($page=='php-advanced'){
	$page='PHP Advanced';
	$data['students'] = Student::getClass($page);
	View::make('all-students', $data);
} else {
	View::make('home', $data);
}
?>