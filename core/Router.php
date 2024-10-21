<?php

namespace Core;

class Router
{
    protected static array $routes = [];

    public static function get(string $uri, array $action)
    {
        $uri = trim($uri, '/');
        self::$routes['GET'][$uri] = $action;
    }

    public static function post(string $uri, array $action)
    {
        $uri = trim($uri, '/');
        self::$routes['POST'][$uri] = $action;
    }

    public static function direct(string $uri, string $requestType)
    {
        if (array_key_exists($uri, self::$routes[$requestType])) {
            [$controller, $method] = self::$routes[$requestType][$uri];

            // Initialize controller object
            $controller = new $controller;

            // Check if the action accepts a parameter
            $reflection = new \ReflectionMethod($controller, $method);
            $params = $reflection->getParameters();

            if (!empty($params) && $params[0]->getType() && !$params[0]->getType()->isBuiltin()) {
                $className = $params[0]->getType()->getName();
                if ($className === Request::class) {
                    return $controller->$method(new Request());
                }
            }
            return $controller->$method();
        } else {
            http_response_code(404);
            view('404');
        }
    }
}
