<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Serve extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName;

    protected function configure()
    {
        $this->setName('serve')->setDescription('Start the server');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('-------------------------------------');
        $output->writeln('Starting the server.');
        $output->writeln('Server Started on localhost:4321');

        shell_exec('php -S 127.0.0.1:4321 index.php');
    }
}