<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface;

class SubscriberController
{
    public function show(ServerRequestInterface $request, array $args)
    {
        return ['name' => 'John Smith'];
    }
}