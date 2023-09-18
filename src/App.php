<?php

namespace App;

class App
{
    public function run(): void
    {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        $router = new Router\Router();
        $router->dispatch($uri, $method);
    }
}