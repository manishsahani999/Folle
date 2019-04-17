<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Test extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName;

    protected function configure()
    {
        $this->setName('test')->setDescription('Testing the console');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Tested');
    }
}