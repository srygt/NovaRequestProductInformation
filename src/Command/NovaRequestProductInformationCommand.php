<?php

namespace NovaRequestProductInformation\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class NovaRequestProductInformationCommand  extends Command
{
    const ARG_NAME = 'argument';
    const OPT_NAME = 'option';

    protected static $defaultName = 'novarequestproductinformation:novarequestproductinformationcommand';

    protected function configure()
    {
        $this->addArgument(self::ARG_NAME, InputArgument::OPTIONAL, 'This is an optional argument.');
        $this->addOption(self::OPT_NAME, null, InputOption::VALUE_OPTIONAL, 'This is an optional option.');
    }

    protected function execute(InputInterface $input, OutputInterface $output) : int
    {
        //get the arguments
        $arguments = $input->getArguments();

        //write a line to the console
        $output->writeln('NovaRequestProductInformation command works.');

        //return success code
        return 1;
    }

}