<?php

namespace CodeBrain\Framework\Http;

use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

class Kernel
{
	public function handle(Request $request): Response
	{

		try {
			[$routeHandler, $vars] = $this->router->dispatch($request);
			$response = call_user_func_array($routeHandler, $vars);
		} catch(\Exception $e) {
			$response = new Response($e->getMessage(), 400);
		}

		return $response;
	}

}