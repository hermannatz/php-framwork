<?php

namespace CodeBrain\Framework\Http;

use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

class Kernel
{
	public function handle(Request $request): Response
	{

		$dispatcher = simpleDispatcher(function( RouteCollector $routeCollector){
			$routeCollector->addRoute('GET', '/', function () {
				$content = '<h1>Hello Response!</h1>';
				return new Response($content);
			});
		});

		$routeInfo = $dispatcher->dispatch($request->server['REQUEST_METHOD'], $request->server['REQUEST_URI']);

		[$status, $handler, $vars] = $routeInfo;
		return $handler($vars);

	}

}