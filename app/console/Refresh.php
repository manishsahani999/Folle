<?php

require_once __DIR__.'/../../database/Migrations.php';

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Refresh extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName;

    protected function configure()
    {
        $this->setName('database:refresh')->setDescription('Drop the Schema and recreates it');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('----------------------------------------------------');
        $migrations = new Migrations();
        $output->writeln('Deleting all the tables');
        $migrations->drop();
        $output->writeln('');
        $output->writeln('');
        $output->writeln('Creating all the tables');
        $migrations->migrate();
    }
}