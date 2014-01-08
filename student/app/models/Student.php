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
		$result = array();
		foreach($students as $student) {
 			if($student['id'] == $id) {
 				$result = $student;
		 	}
 		}
 		if(count($result) < 1) {
			return null; 			
 		} 
 		return $result;
	}

	public static function getClass($page){
		$students = static::dataCombine();
		$result = array();
		foreach($students as $student){
			if($student['class']==$page){
				$result[]=$student;
			}
		}
		return $result;		
	}
}

 ?>