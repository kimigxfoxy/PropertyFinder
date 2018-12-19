<?php
namespace PropertyFinder\Routing;

class Dispatcher
{

    private $request;
    private $routes = array(
        // route => actual page
        'page/:action/:id' => array("controller"=>"Test","action"=>"index"),
        'page/:action' => 'actualPage',
    );

    public function dispatch()
    {
        $this->request = new Request();

        $router=new Router();

        $request=$router->parse($this->routes, "page/edit/12");

        $requestParams=$request[0];

        $requestMapping=$request[1];

        $controller = $this->loadController($requestMapping);

        call_user_func_array([$controller, $name = $requestMapping["action"]], $requestParams);
    }

    public function loadController($requestMapping)
    {
        $name = $requestMapping["controller"]."Controller";
        $fully_qualified_name = "PropertyFinder" . '\\' . "Controllers" . '\\' . $name;
        $controller=new $fully_qualified_name;
        return $controller;
    }

}
?>