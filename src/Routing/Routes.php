<?php
namespace PropertyFinder\Routing;


/**
 * @author Davison Mghanga Kimigho <dkimigz@gmail.com>
 * Class that stores application routes
 * Class Routes
 * @package PropertyFinder\Routing
 */
class Routes {

    /**
     * Stores application routes in the format e.g.
     * route/:params/:params/route => array("controller"=>"Test","action"=>"index") or
     * "hello/world" => array("controller"=>"Test","action"=>"hello") etc
     * modify array contents to add routes in the said format
     * @var array
     */
    private $routes = array(
        // route/route => array("controller"=>"Test","action"=>"index")
        "page/:action/:id" => array("controller"=>"test","action"=>"index"),
        "hello/world" => array("controller"=>"test","action"=>"hello"),
    );

    /**
     * Returns application routes
     * @return array
     */
    public function getRoutes(){
        return $this->routes;
    }
}