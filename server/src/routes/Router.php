<?php
namespace App\Routes;

class Router {
    private $routes = [];

    public function get($route, $handler) {
        $this->routes['GET'][$route] = $handler;
    }

    public function post($route, $handler) {
        $this->routes['POST'][$route] = $handler;
    }

    public function dispatch($method, $uri) {
        $method = strtoupper($method);
        $uri = explode('?', $uri)[0];
        
        if (isset($this->routes[$method][$uri])) {
            call_user_func($this->routes[$method][$uri]);
            
        } else {
            http_response_code(404);
            echo json_encode(["message" => "Route not found"]);
        }
    }
}
