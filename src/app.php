<?php

use App\Framework;
use DI\ContainerBuilder;

include __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new ContainerBuilder;
$containerBuilder->addDefinitions(__DIR__ . '/config.php');
$container = $containerBuilder->build();

$backend = $container->get(Framework::class);
$response = $backend->handle();
(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);