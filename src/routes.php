<?php

use App\Http\Controllers\SubscriberController;

$router->map('GET', '/subscriber', [SubscriberController::class, 'show']);
