<?php

require_once __DIR__.'/../../database/Migrations.php';

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Drop extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName;

    protected function configure()
    {
        $this->setName('database:drop')->setDescription('Drop the Schema');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('----------------------------------------------------');
        $migrations = new Migrations();
        $migrations->drop();
    }
}