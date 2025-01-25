<?php
/**
 * Description
 *
 * @package  CodeBrain\Framework\Routing
 * @since    1.0.0
 * @author   HermannAzong
 * @link     http://code-brain.com
 * @licence  GNU General Public license 2.0+
 */

namespace CodeBrain\Framework\Routing;

use CodeBrain\Framework\Http\Request;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

class Router implements RouterInterface
{

	public function dispatch( Request $request ): array
	{
		$dispatcher = simpleDispatcher(function( RouteCollector $routeCollector){
			$routes = include BASE_PATH . '/routes/web.php';
			foreach($routes as $route){
				$routeCollector->addRoute(...$route);
			}
		});

		$routeInfo = $dispatcher->dispatch($request->getMethod(), $request->getPathInfo());

		[$status, [$controller, $method], $vars] = $routeInfo;

		return [[new $controller, $method], $vars];
	}
}