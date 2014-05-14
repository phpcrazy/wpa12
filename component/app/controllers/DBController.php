<?php 


use Illuminate\Database\Capsule\Manager as DB;

class DBController {
	public function actionIndex() {
		// $students = DB::table('students')->get();
		// var_dump($students);

		/*
		// Eloquent
		$students = Student::get()->toArray();
		var_dump($students);
		*/
		$data = array(
			'title'			=> 'Myanmar Links',
			'another_title'	=> 'Myanmar Developers'
			);
		return View::makeBlade('dbtest', $data);

	}
}

 ?>