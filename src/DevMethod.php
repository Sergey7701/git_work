<?php
namespace App;

// src/Command/CreateUserCommand.php


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class DevMethod extends Command
{

    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        $this->setname('dev command');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('dev command');
        return 0;
    }
}
