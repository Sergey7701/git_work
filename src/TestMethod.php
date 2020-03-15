<?php
namespace App;

// src/Command/CreateUserCommand.php


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class TestMethod extends Command
{

    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        $this->setname('test command');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('test command');
        return 0;
    }
}
