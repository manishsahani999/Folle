<?php 

/*
|
|   Turn the lights on.
|
*/
require __DIR__.'/app.php';
$app = new App();

/*
|
|   Connect with the Database.
|
*/
$database = require __DIR__.'/../modules/database.php';
$app->bind($database);

