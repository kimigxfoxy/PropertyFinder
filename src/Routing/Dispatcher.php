<?php
namespace PropertyFinder\Routing;

/**
 * @author Davison Mghanga Kimigho <dkimigz@gmail.com>
 * Class Dispatcher
 * @package PropertyFinder\Routing
 * This class loads controllers and dispatches requests to the relevant controllers
 */
class Dispatcher
{

    /**
     * Dispatches requests to the relevant controllers
     */
    public function dispatch()
    {
        $request = new Request();

        $url=$request->getUrl();

        $router=new Router();

        $routesInstance=new Routes();

        $routes=$routesInstance->getRoutes();

        $routeInfo=$router->parse($routes, $url);

        $requestParams=$routeInfo[0];

        $requestMapping=$routeInfo[1];

        $controller = $this->loadController($requestMapping);

        call_user_func_array([$controller, $name = $requestMapping["action"]."Action"], $requestParams);
    }

    /**
     * Loads controllers dynamically
     * @param $requestMapping
     * @return mixed
     */
    public function loadController($requestMapping)
    {
        $name = ucfirst($requestMapping["controller"])."Controller";
        $fully_qualified_name = "PropertyFinder" . '\\' . "Controllers" . '\\' . $name;
        $controller=new $fully_qualified_name;
        return $controller;
    }

}
