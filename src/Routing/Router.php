<?php

namespace PropertyFinder\Routing;

/**
 * @author Davison Mghanga Kimigho <dkimigz@gmail.com>
 * Class that manages extraction of  $routeParams and $routeMappings
 * Class Router
 * @package PropertyFinder\Routing
 */
class Router
{


    /**
     * @param $routes
     * @param $uriPath
     * @return array
     * @throws \Exception
     */
    public function parse($routes, $uriPath){

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
        throw new \Exception("Route not found: 404");
    }
}
