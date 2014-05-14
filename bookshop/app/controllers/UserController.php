<?php 
class UserController extends BaseController{

	// Create Customer Account
	public function register() {

		// Check Post method or Not
		if(Request::server('REQUEST_METHOD') == 'POST') {			
			
			// Rule For Register
			$rules = array(
				'name'	=> 'required|unique:users,username',
				'email'		=> 'required|email|unique:users,email',
				'password'	=> 'required|min:4',
				'password-confirmation' => 'required|same:password'
			);
			
			// Take All Data Except _Taken from form 
			$userdata = Input::except('_token'); 

			// Validate $userdata and $rule
			$validation = Validator::make($userdata, $rules);

			if($validation->fails()) {
				return Redirect::back()
					->withErrors($validation)
					->withInput($userdata);
			}else {
				$savedata = array(
					'username'	=> $userdata['name'],
					'email'		=> $userdata['email'],
					'password'	=> Hash::make($userdata['password']),
					);

				$success = User::insert($savedata);

					if($success){

					// Mail::send('hello', array('name'=>Input::get('name')), function($message){
					//         $message ->to(Input::get('email'))
					//  		->from('daweithar@gmail.com' , 'Daweithar')
					//         		->subject('Successfully Create Account!');
					// });
						
					return Redirect::to('login')
					->with('message' , 'successfully create account!');
				}
			}
		}
		return View::make('user/register');
	}

	// Customer Login
	public function login(){
		if(Request::server('REQUEST_METHOD') == 'POST'){
			$rules = array(
				'username'	=> 'required|min:3',
				'password'	=> 'required|min:4'
			);

			$loginuser= array(
				'username'	=> Input::get('username'),
				'password'	=> Input::get('password')
			);

			$validator= Validator::make($loginuser, $rules);

			if($validator->fails()){
				return Redirect::to('login')
				->withErrors($validator)
				->withInput(Input::except('password'));
			}else{
				if(Auth::attempt($loginuser)){
				return Redirect::to('admin');
				}else{
					$message = "Username or password is wrong!";
					return Redirect::to('login')
					->with('message', $message);
				}
			}
		}
		return View::make('user/login');
	}

	public function listUsers() {
		return "Hello from listUsers";
	}

	public function dashboard() {
		return View::make('dashboard');
	}
}
?>