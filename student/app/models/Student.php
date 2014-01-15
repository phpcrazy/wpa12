<?php 

class Student {

	private static function getData() {
		$sql = "SELECT students.id, students.name, 
		students.address, classes.name 
		FROM students, classes
		WHERE students.class_id = classes.id";

		$sql2 = "SELECT interests.name
		FROM students_interests, interests
		WHERE students_interests.student_id =?
		AND students_interests.interest_id = interests.id
		AND interests.type = ?";

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
		$students = $query->fetchAll(PDO::FETCH_ASSOC);
		$stmt = $conn->prepare($sql2);
		$students_collection = array();
		foreach($students as $student) {
			$students_collection[] = $student;
			$interest_collection = array(
				'interest'	=> array(
					'script'	=> array(),
					'language'	=> array()
					)
				);
			$stmt->execute(array($student['id'], 'script'));
			$interests = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$stmt->execute(array($student['id'], 'language'));
			$interests2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
			foreach($interests as $interest) {
				$interest_collection['interest']['script'][]  = $interest['name'];
			}
			foreach($interests2 as $int2) {
				$interest_collection['interest']['language'][] = $int2['name'];
			}
			$students_collection = array_merge($students_collection, $interest_collection);
			var_dump(serialize($students_collection));
		}
		$stmt->closeCursor();
		return $students_collection;
		
	}
	public static function all() {
		var_dump(static::getData());
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
			if($student['class']==$page){
				$result[]=$student;
			}
		}
		return $result;		
	}
}

?>