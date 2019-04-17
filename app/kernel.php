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
$database = require __DIR__.'/init/database.php';
$app->bind($database);

