<?php

namespace Core;

class Router
{
    private $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function get($path, $handler)
    {
        $this->routes['GET'][$path] = $handler;
    }

    public function post($path, $handler)
    {
        $this->routes['POST'][$path] = $handler;
    }

    public function dispatch($uri, $requestMethod)
    {
        // Parse the requested path (ignore query string)
        $path = parse_url($uri, PHP_URL_PATH);
        // Remove trailing slash (if any)
        $path = rtrim($path, '/');

        if (isset($this->routes[$requestMethod][$path])) {
            $handler = $this->routes[$requestMethod][$path];
            [$class, $method] = explode('@', $handler);
            $controller = new $class();
            return call_user_func([$controller, $method]);
        }

        // If no match, 404
        header('HTTP/1.1 404 Not Found');
        echo "404 Not Found";
    }
}
