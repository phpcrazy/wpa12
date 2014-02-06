<?php 

class StudentController {

	public function actionHome() {
		return View::make('home');
	}

	public function allstudents() {
		$data['students'] = Student::all();
		return View::make('all-students', $data);
	}
}

 ?>