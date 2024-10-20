<?php

namespace Core;

class Router
{
    protected array $routes = [];

    public function get(string $uri, string $controller)
    {
        $uri = trim($uri, '/');
        $this->routes['GET'][$uri] = $controller;
    }

    public function post(string $uri, string $controller)
    {
        $uri = trim($uri, '/');
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct(string $uri, string $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
    }

    public function callAction(string $controller, string $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new \Exception(
                "{$controller} does not correspond to the {$action} action."
            );
        }

        return $controller->$action();
    }
}
