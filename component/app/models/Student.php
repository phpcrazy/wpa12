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
			stuclasses.class_name AS class_name
			FROM students, (
				SELECT classes.name AS class_name, 
				students_classes.student_id 
				FROM students_classes, classes 
				WHERE students_classes.class_id = classes.id) AS stuclasses
			WHERE students.id = stuclasses.student_id";
		$conn = static::getConn();
		$stmt = $conn->query($sql);
		$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		return $students;		
	}

	public static function getInterests($student_id, $interest_type) {
		$sql = "SELECT interests.name
			FROM students_interests, interests
			WHERE students_interests.interest_id = interests.id
			AND students_interests.student_id = :student_id 
			AND interests.type = :interest_type";
		$conn = static::getConn();
		$stmt = $conn->prepare($sql);
		$stmt->execute(array(
			'student_id' => $student_id, 
			'interest_type' => $interest_type));
		$interests = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		return $interests;
	}

	public static function search($q) {
		$sql = "SELECT students.id, 
			students.name, 
			students.address, 
			classes.name AS class_name
			FROM students, classes
			WHERE students.class_id = classes.id AND 
			(students.name LIKE :search_word OR
			classes.name LIKE :search_word OR
			students.address LIKE :search_word)
			GROUP BY students.id";

		$conn = static::getConn();
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':search_word', '%' . $q . '%' );
		$stmt->execute();
		$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $students;
	}

public static function getExperiences($id) {
		$sql = "SELECT 
			experiences.id, 
			experiences.name, 
			experiences.from, 
			experiences.to
			FROM experiences
			WHERE experiences.student_id = :student_id";

		$conn = static::getConn();
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':student_id', $id);
		$stmt->execute();
		$experiences = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $experiences;
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