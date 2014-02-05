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

$request = Request::createFromGlobals();

// Route Rules Creation
$routes = new RouteCollection();
$routes->add('hello', new Route('/hello/{name}', 
	array(
		'_controller' => 'HelloController',
		'name' => 'World'
		)));
$routes->add('bye', new Route('/bye'));
$routes->add('home', new Route('/'));

// Request filtering
$context = new RequestContext();
$context->fromRequest($request);

// prepare UrlMatcher 
$matcher = new UrlMatcher($routes, $context);

// Url Matching
try {
	$attributes = $matcher->match($request->getPathInfo());
	extract($attributes, EXTR_SKIP);
	$homeController = new HomeController;
	$get_response = call_user_func_array(array($homeController, 'actionHome'), array('name' => $name));
	$response = new Response($get_response, 200);
} catch (Routing\Exception\ResourceNotFoundException $e) {
	$response = new Response('Not Found', 404);
} catch (Exception $e) {
	$response = new Response('An error occured!', 500);
} 

$response->send();

 ?>
