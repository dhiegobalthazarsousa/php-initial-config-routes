<?php
namespace config;

use config\RouteSwitch;

class Router extends RouteSwitch
{
    public function run(string $requestUri)
    {
        $route = substr($requestUri, 11);
        echo $route;
        if ($route === '') {
            $this->home();
        } else {
            $this->$route();
        }
    }
}