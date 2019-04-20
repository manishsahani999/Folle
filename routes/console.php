<?php
require __DIR__.'/../app/console/Serve.php';
require __DIR__.'/../app/console/Migrate.php';
require __DIR__.'/../app/console/Drop.php';
require __DIR__.'/../app/console/Refresh.php';


$application->add(new Serve());
$application->add(new Migrate());
$application->add(new Drop());
$application->add(new Refresh());