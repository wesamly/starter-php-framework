<?php

use League\Route\Router;

return [

    Router::class => function() {
        $responseFactory = new \Laminas\Diactoros\ResponseFactory();
        $strategy = new \League\Route\Strategy\JsonStrategy($responseFactory);
        $router = (new \League\Route\Router)->setStrategy($strategy);
        
        include __DIR__ . '/routes.php';

        return $router;
    }

];