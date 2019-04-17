<?php

use Symfony\Component\Console\Application;

$application = new Application();

include __DIR__.'/../../routes/console.php';

$application->run();