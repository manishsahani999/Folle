<?php 


/*
|
|  Import the database configrations.
|
*/
$configs = require __DIR__.'/../config/database.php';

/*
|
|   Import the Database Service Provider.
|
*/
require __DIR__.'/../app/providers/DatabaseServiceProvider.php';

/*
|
|   Create a Database Instance, with configs.
|
*/
$databaseServiceProvider = new DatabaseServiceProvider($configs);

/*
|
|   Turn the lights on, booting connects to database;
|
*/
$databaseServiceProvider->boot();


/*
|
|   return the providers address for bindings to app.
|
*/
return $databaseServiceProvider;