<?php

require __DIR__.'/../../database/Migrations.php';

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Migrate extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName;

    protected function configure()
    {
        $this->setName('database:migrate')->setDescription('Create the Schema');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('----------------------------------------------------');
        $migrations = new Migrations();
        $migrations->migrate();
    }
}