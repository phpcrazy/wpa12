<?php 
namespace Wpa12;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpKernel;

class Application {
	private $request;
	private $context;

	public function __construct() {
		$this->request = Request::createFromGlobals();
		$this->context = new RequestContext();
	}

	public function run() {
		$this->context->fromRequest($this->request);
		$resolver = new HttpKernel\Controller\ControllerResolver();

		// prepare UrlMatcher 
		$routes = include DD . "/app/routes.php";
		$matcher = new UrlMatcher($routes, $this->context);

		// Url Matching
		try {
			$this->request->attributes->add($matcher->match($this->request->getPathInfo()));
			$controller = $resolver->getController($this->request);
			$arguments = $resolver->getArguments($this->request, $controller);	
			$get_response = call_user_func_array($controller, $arguments);
			$response = new Response($get_response, 200);
		} catch (Routing\Exception\ResourceNotFoundException $e) {
			$response = new Response('Not Found', 404);
		} catch (Exception $e) {
			$response = new Response('An error occured!', 500);
		}
		$response->send();
	}
}

?>