<?php 

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Wpa12\Application;

class StudentController {

	public function actionHome() {
		return View::make('home');
	}

	public function allstudents() {
		$data['students'] = Student::all();
		return View::make('all-students', $data);
	}

	public function addStudent($request) {
		// $request = Request::createFromGlobals();
		var_dump($request);
		if($request->server->get('REQUEST_METHOD') == 'POST') {
			$userdata = array(
				'name'		=> $request->request->get('name'),
				'address'	=> $request->request->get('address')
				);
			var_dump($userdata);
			$response = new RedirectResponse('/all-students');
			$response->send();

		}
		return View::make('add-student');
	}
}

 ?>