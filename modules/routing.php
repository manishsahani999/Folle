<?php

/*
|
|   Import the Routing Service Provider.
|
*/
require __DIR__.'/../app/providers/RoutingServiceProvider.php';


/*
|
|   Create Routing Instance.
|
*/
$routingServiceProvider = new RoutingServiceProvider();

/*
|
|   Turn the lights on.
|
*/
$routingServiceProvider->boot();

/*
|
|   return the providers address for bindings to app.
|
*/
return $routingServiceProvider;