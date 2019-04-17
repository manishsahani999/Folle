<?php 

$databaseConfigs = require __DIR__.'/../../config/database.php';
require __DIR__.'/../providers/DatabaseServiceProvider.php';

$databaseServiceProvider = new DatabaseServiceProvider($databaseConfigs);
$databaseServiceProvider->boot();

return $databaseServiceProvider;