<?php 

class Book {
	public $books = array();
	public function __construct() {
		$this->books = require DD . '/data/Book.php';
	}
}
?>