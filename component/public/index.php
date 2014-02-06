<?php

define('DD', __DIR__ . '/../'); 
require DD . "/vendor/autoload.php";

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpKernel;

$request = Request::createFromGlobals();

// Route Rules Creation
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

// Request filtering
$context = new RequestContext();
$context->fromRequest($request);

$resolver = new HttpKernel\Controller\ControllerResolver();

// prepare UrlMatcher 
$matcher = new UrlMatcher($routes, $context);

// Url Matching
try {
	$request->attributes->add($matcher->match($request->getPathInfo()));
	$controller = $resolver->getController($request);
	$arguments = $resolver->getArguments($request, $controller);	
	$get_response = call_user_func_array($controller, $arguments);
	$response = new Response($get_response, 200);
} catch (Routing\Exception\ResourceNotFoundException $e) {
	$response = new Response('Not Found', 404);
} catch (Exception $e) {
	$response = new Response('An error occured!', 500);
} 

$response->send();

 ?>
