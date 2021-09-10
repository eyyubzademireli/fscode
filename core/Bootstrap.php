<?php

namespace Core;

use Buki\Router\Router;

class Bootstrap
{

    public $router;
    public $view;

    public function __construct()
    {
        $this->router = new Router([
            'paths' => [
                'controllers' => 'app/controllers',
            ],
            'namespaces' => [
                'controllers' => 'App\Controllers',
            ]
        ]);

        $this->view = new View();
    }

    public function run()
    {
        $this->router->run();
    }

}