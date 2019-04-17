<?php

/*
|
|   Includes all the class names of components.
|
*/
require __DIR__.'/vendor/autoload.php';


/*
|
|   Thing that is running throughout the app lifecycle.
|   Initalizes App and other Common service modules like Database etc.
|   Binds Modules with app
|
*/
include __DIR__.'/app/kernel.php';


// Routing
require __DIR__.'/app/providers/RoutingServiceProvider.php';
$routingServiceProvider = new RoutingServiceProvider();
$routingServiceProvider->boot();
$app->bindRouting($routingServiceProvider);
