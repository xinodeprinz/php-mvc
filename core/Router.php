<?php

namespace Core;

class Router
{
    protected static array $routes = [];

    public static function get(string $uri, array $action)
    {
        $uri = trim($uri, '/');
        self::$routes['GET'][self::convertUri($uri)] = $action;
    }

    public static function post(string $uri, array $action)
    {
        $uri = trim($uri, '/');
        self::$routes['POST'][self::convertUri($uri)] = $action;
    }

    /**
     * Convert URI with dynamic segments into a regex pattern.
     * Example: /users/{id} becomes /users/(?P<id>[a-zA-Z0-9_]+)
     */
    protected static function convertUri($uri)
    {
        return preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-zA-Z0-9_]+)', $uri);
    }

    /**
     * Direct the request to the correct controller and method.
     */
    public static function direct(string $uri, string $requestType)
    {
        $uri = trim($uri, '/');

        foreach (self::$routes[$requestType] as $route => $action) {
            // Check if the route matches the URI pattern
            if (preg_match("#^$route$#", $uri, $matches)) {
                [$controller, $method] = $action;
                $controller = new $controller;

                // Filter named parameters from the regex matches
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);

                // Reflection to check if Request object needs to be injected
                $reflection = new \ReflectionMethod($controller, $method);
                $methodParams = $reflection->getParameters();

                if (!empty($methodParams)) {
                    $firstParam = $methodParams[0];

                    // If the first parameter is a Request object, inject it
                    if ($firstParam->getType() && !$firstParam->getType()->isBuiltin()) {
                        $className = $firstParam->getType()->getName();
                        if ($className === Request::class) {
                            array_unshift($params, new Request());
                        }
                    }
                }

                // Call the controller method with dynamic parameters
                return $controller->$method(...array_values($params));
            }
        }

        // If no route matches, return a 404 response
        http_response_code(404);
        view('404');
    }
}
