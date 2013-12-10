<?php 
class Dog {
	public $name;
	private $leg;
	public function __construct($name, $leg = 4) {
		$this->name = $name;
		$this->leg = $leg;
	}
	public function getLeg() {
		echo $this->leg . " Idiot!";
	}
	public function bark($sound) {
		echo $sound . "<br />";
	}
}

class Student {
	public $name;
	private $address;
	public $extra = array();

	public function __construct($name, $address)  {
		$this->name = $name;
		$this->address = $address;
	}

	public function attend() {
		echo $this->name . ' is attended! ' . "<br />";
	}

	public function __call($name, $arguments) {
		var_dump($name);
		var_dump($arguments);
	}

	public function __set($key, $val) {
		$this->extra[$key] = $val;
	}


}

$student = new Student('Aung Aung', 'Hledan');
$student->attend();
$student->sing('Hey!');
$student->dance('Break Dance');
$student->goo = 'Goo';
echo $student->extra['goo'];
?>
