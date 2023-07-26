<?php
namespace config;

abstract class RouteSwitch{

    protected function login()
    {
        require dirname(__DIR__) . '/views/pages/login.html';
    }

    protected function home()
    {
        require dirname(__DIR__) . '/views/pages/home.html';
    }

    protected function about()
    {
        require dirname(__DIR__) . '/views/pages/about.html';
    }

    protected function contact()
    {
        require dirname(__DIR__) . '/views/pages/contact.html';
    }
    
    public function __call($name, $arguments)
    {
        http_response_code(404);
        require dirname(__DIR__) . '/views/pages/not-found.html';
    }
}