<?php

define('DD', __DIR__ . '/../'); 
require DD . '/vendor/autoload.php';

/* $sitetitle = Config::get('site_title');
echo $sitetitle . "<br />";
$foobar = Config::get('foo.bar.moo');
echo $foobar;*/


$data['site_title']	= Config::get('site_title');

// URI Request

$request_uri = htmlspecialchars($_SERVER['REQUEST_URI']);
$script_name = $_SERVER['SCRIPT_NAME'];
$request_uri = explode('/', $request_uri);
$script_name = explode('/', $script_name);
$script_request = array_diff($request_uri, $script_name);
if(empty($script_request)) {
	$result = array(0 => '');
} else {
	$result = array_values($script_request);
}

switch($result[0]) {
	case "all-students":
		$data['students'] = Student::all();
		View::make('all-students', $data);
		break; 
	case "detail":
		if(isset($result[1])) {
			$data['students'] = Student::get($result[1]);
			View::make('detail', $data);
			break;	
		} else {
			View::make('404', $data);
			break;
		}
	case "php-foundation":
		$result[0]='PHP Foundation';
		$data['students']=Student::getClass($result[0]);
		View::make('all-students',$data);
		break;
	case "php-advanced":
		$result[0]='PHP Advanced';
		$data['students']=Student::getClass($result[0]);
		View::make('all-students',$data);
		break;
	case "":
		View::make('home', $data);
		break;
	default:
		View::make('404', $data);
}




/*
// Get request 

$page = isset($_GET['page']) ? $_GET['page'] : '';
$page = htmlspecialchars($page);

switch($page) {
	case "all-students":
		$data['students'] = Student::all();
		View::make('all-students', $data);
		break;
	case "detail":
		$data['students'] = Student::get(htmlspecialchars($_GET['id']));
		View::make('detail', $data);
		break;
	case "php-foundation":
		$page='PHP Foundation';
		$data['students']=Student::getClass($page);
		View::make('all-students',$data);
		break;
	case "php-advanced":
		$page='PHP Advanced';
		$data['students']=Student::getClass($page);
		View::make('all-students',$data);
		break;
	case "":
		View::make('home', $data);
		break;
	default:
		View::make('404', $data);
}
*/

/*
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
*/
?>