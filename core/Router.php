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
            return self::callAction($controller, $method);
        }
    }

    public static function callAction(string $controller, string $action)
    {
        $controller = new $controller;
        if (!method_exists($controller, $action)) {
            throw new \Exception(
                "{$controller} does not correspond to the {$action} action."
            );
        }
        return $controller->$action();
    }
}
