<?php
namespace config;

use config\RouteSwitch;

class Router extends RouteSwitch
{
    public function run(string $requestUri)
    {
        $route = explode("/", strtolower($requestUri))[2];
        if ($route === "") {
            $this->home();
        } else {
            $this->$route();
        }
    }
}