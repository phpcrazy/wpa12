<?php 

class Student {
	public static function all() {
		return static::dataCombine();
	}

	private static function dataCombine() {
		$students_mla = require DD . '/app/data/students_mla.php';
		$students_mlh = require DD . '/app/data/students_mlh.php';
		return array_merge($students_mla, $students_mlh);
	}

	public static function get($id) {
		$students = static::dataCombine();
		if(array_key_exists($id, $students)) {
			$result = array();
		 	foreach($students as $student) {
 				if($student['id'] == $id) {
 					$result = $student;
		 		}
 			}
 			return $result;
		} else {
			return null;
		}
	}
}

 ?>