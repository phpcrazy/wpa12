<?php 
// Route Rules Creation
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();

$routes->add('home', new Route('/', 
	array(
		'_controller' => 'StudentController::actionHome'
		)
	)
);

$routes->add('allstudents', new Route('/all-students',
	array(
		'_controller'	=> 'StudentController::allstudents'
		)
	)
);

$routes->add('login', new Route('/login', 
	array(
		'_controller' => 'StudentController::login'
		)
	)
);

$routes->add('add-student', new Route('/add-student',
	array(
		'_controller'	=> 'StudentController::addStudent',
		'request'	=> ''
		)
	)
);

$routes->add('db-test', new Route('/db-test',
	array(
		'_controller'	=> 'DBController::actionIndex'

		)
	)
);

return $routes;
 ?>