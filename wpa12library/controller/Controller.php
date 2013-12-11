<?php 
abstract class Controller {
	public $data = array();

	public function __construct() {
		$child_class = get_called_class();
		$this->data = require DD . '/data/' . $child_class . 's.php';
 	}
}
?>