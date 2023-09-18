<?php

namespace App;

class App
{
    public function run(): void
    {
        $uri = $_SERVER['REQUEST_URI'];
        $router = new Router\Router();
        $router->dispatch($uri);
    }
}