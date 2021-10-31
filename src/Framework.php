<?php

namespace App;

use League\Route\Router;

class Framework
{
    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function handle()
    {
        $request =  \Laminas\Diactoros\ServerRequestFactory::fromGlobals();
        
        // Fix base path for the request
        $request->withUri($request->getUri()->withPath(rtrim(pathinfo($_SERVER['REQUEST_URI'], PATHINFO_DIRNAME), '/')));
        $response = $this->router->dispatch($request);

        return $response;
    }

}