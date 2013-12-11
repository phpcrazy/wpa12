<?php 
class Dog {
	public $name;
	public function __construct($name) {
		$this->name = $name;
	}
	public function bark($sound) {
		echo $sound;
	}
}

class Puppy extends Dog {
	public $leg;
	public function __construct($name, $leg) {
		parent::__construct($name);
		$this->leg = $leg;
	}
	public function run() {
		echo 'Puppy run!';
	}
}

$dog = new Puppy('Bo Bo', 3);
echo $dog->name . "<br />";
echo $dog->leg . "<br />";
$dog->bark('Whoof!');
$dog->run();

 ?>
