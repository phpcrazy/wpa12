<?php 
require __DIR__ . '/vendor/autoload.php';

// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;
use Car\Toyota;

// $log = new Logger('name');
// $log->pushHandler(new StreamHandler(__DIR__ . '/log/project.log', 
//	Logger::WARNING));

// $log->addWarning("You site has been user attacked!");

$car = new Toyota('Belta');
echo $car->name;
$db = new DB('test');
echo $db->dbname;


 ?>