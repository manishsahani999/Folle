<?php
require __DIR__.'/../app/console/Serve.php';
require __DIR__.'/../app/console/Migrate.php';
require __DIR__.'/../app/console/Test.php';


$application->add(new Serve());
$application->add(new Migrate());
$application->add(new Test());