<?php 

class Student {
	private $data = array();

	public function __construct() {
		$sql = "SELECT students.id, students.name, 
					students.address, classes.name 
				FROM students, classes
				WHERE students.class_id = classes.id";

		try {
			$conn = new PDO('mysql:host=' 
				. Config::database('mysql.hostname')
				. ';dbname=' . Config::database('mysql.dbname'), 
				Config::database('mysql.username'), 
				Config::database('mysql.password'));	
		} catch (PDOException $e) {
			trigger_error('Something wrong with database connection!', 
				E_USER_ERROR);
		}
		
		$query = $conn->query($sql);
		$this->data = $query->fetchAll();

		var_dump($this->data);
	}
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