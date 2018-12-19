<?php

namespace PropertyFinder\Routing;

class Router
{

    private $x = array();

//    static public function parse($url, $request)
//    {
//
//        $url = trim($url);
//
//        if ($url == "/PHP_Rush_MVC/") {
//            $request->controller = "tasks";
//            $request->action = "index";
//            $request->params = [];
//        } else {
//            $explode_url = explode('/', $url);
//            $explode_url = array_slice($explode_url, 2);
//            $request->controller = $explode_url[0];
//            $request->action = $explode_url[1];
//            $request->params = array_slice($explode_url, 2);
//        }
//
//    }

    static public function parse($routes, $uriPath){

        // Loop through every route and compare it with the URI
        foreach ($routes as $route => $routeMappings) {

            // Create a route with all identifiers replaced with ([^/]+) regex syntax
            // E.g. $route_regex = shop-please/([^/]+)/moo (originally shop-please/:some_identifier/moo)
            $route_regex = preg_replace('@:[^/]+@', '([^/]+)', $route);

            // Check if URI path matches regex pattern, if so create an array of values from the URI
            if (!preg_match('@' . $route_regex . '@', $uriPath, $matches)) continue;

            // Create an array of identifiers from the route
            preg_match('@' . $route_regex . '@', $route, $identifiers);

            // Combine the identifiers with the values
            $routeParams = array_combine($identifiers, $matches);
            array_shift($routeParams);

            $request=array($routeParams, $routeMappings);

            return $request;
        }

        // We didn't find a route match
        return false;
    }
}

?>