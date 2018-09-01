<?php

namespace Core;

class Router
{
    protected $url;
    protected $routes;
    protected $class;
    protected $method;
    protected $id;

    public function __construct()
    {
        $this->url = parse_url($_SERVER['REQUEST_URI']);
        $this->routes = explode('/', $this->url['path']);
        if (count($this->routes) > 1) {
            $this->initValues($this->routes);
        }
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getId()
    {
        return $this->id;
    }

    protected function initValues($routes)
    {
        $this->class = $routes[1] ?? '';
        $this->method = $routes[2] ?? '';
        $this->id = $routes[3] ?? '';
    }
}