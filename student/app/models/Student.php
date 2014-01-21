<?php 

class Student {

	private static function getConn() {
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
		return $conn;
	}

	private static function getData() {
		$sql = "SELECT students.id, 
			students.name, 
			students.address, 
			classes.name AS class_name
			FROM students, classes
			WHERE students.class_id = classes.id";
		$conn = static::getConn();
		$stmt = $conn->query($sql);
		$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		return $students;		
	}

	public static function getInterests($student_id, $interest_name) {
		$sql = "SELECT interests.name
			FROM students_interests, interests
			WHERE students_interests.interest_id = interests.id
			AND students_interests.student_id = ? 
			AND interests.type = ?";
		$conn = static::getConn();
		$stmt = $conn->prepare($sql);
		$stmt->execute(array($student_id, $interest_name));
		$interests = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		return $interests;
	}

	public static function all() {
		return static::getData();
	}

	public static function get($id) {
		$students = static::getData();
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
		$students = static::getData();
		$result = array();
		foreach($students as $student){
			if($student['class_name']==$page){
				$result[]=$student;
			}
		}
		return $result;		
	}
}

?>