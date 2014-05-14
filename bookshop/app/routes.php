<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function(){
	return "Hello from Home!";
});

Route::get('view', function() {
	return View::make('test');
});

Route::get('controller', 'BookController@actionIndex');

Route::get('hello/{name}/{id}', function($name, $id){
	return "Hello " . $name . ", your id is " . $id;
})->where('name', '[A-Za-z]+')->where('id', '[0-9]+');

Route::get('optional/{name?}', function($name = null){
	echo "Hello " . $name;
});

Route::get('name', array(
	'as'	=> 'nameroute',
	function() {
		echo URL::to('redirect');
		echo URL::route('namecontroller');
		echo "<br />";
		return 'Hello from name Route';
	}));

Route::get('namec', array(
	'as'	=> 'namecontroller',
	'uses'	=> 'BookController@actionIndex'
	));

Route::get('redirect', function(){
	return Redirect::route('namecontroller');
});

Route::get('redirecto', function(){
	return Redirect::to('/');
});

Route::group(array('prefix' => 'admin'), function()
{
	Route::get('user', function()
	{
		//
		return "Admin USer";
	});

	Route::get('hell', function(){
		App::abort(404);
	});
});
*/

Route::group(array('before' => 'auth', 'prefix' => 'admin'), function()
{
	Route::get('/sudo a', 'UserController@dashboard');

	Route::get('logout', function(){
		Auth::logout();
		return Redirect::to('/admin');
	});
	Route::get('users', 'UserController@listUsers');
});

Route::get('login', 'UserController@login');

Route::post('login', array('before' => 'csrf', 
	'uses' =>'UserController@login'));

/*
Route::get('adduser', function(){
	$userdata = array(
		'username'	=> 'naung',
		'email'	=> 'naung@gmail.com',
		'password'	=> Hash::make('123456')
		);
	DB::table('users')->insert($userdata);

});
*/
Route::get('register', 'UserController@register');
Route::post('register', array(
	'before' => 'csrf',
	'uses'	=> 'UserController@register'
	));

Route::resource('posts', 'PostsController');
Route::resource('customers', 'CustomersController');
Route::resource('orders', 'OrdersController');
Route::resource('tweets', 'TweetsController');

Route::any('upload', function(){
	if(Request::isMethod('post')) {
		$file = Input::file('file');
		$mime = Input::file('file')->getMimeType();
		$destinationPath = 'uploads/';
		$filename = $file->getClientOriginalName();
		if($mime == 'text/plain') {
			$upload_success = Input::file('file')->move($destinationPath, $filename);
			if($upload_success) {
				return "Upload OK!";
			} else {
				return "Error!";
			}
		} else {
			return "Your file type is wrong";
		}
	}
	return View::make('upload');
});
