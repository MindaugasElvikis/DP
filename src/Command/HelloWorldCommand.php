<?php

namespace App\Command;

/**
 * Class HelloWorldCommand.
 */
class HelloWorldCommand extends BaseCommand
{
    /**
     * @return void
     */
    public function execute()
    {
        $this->output->writeLn('adsfadsgdsgs');
        $this->output->writeLn('adsfadsgdsgs');
        $this->output->write('adsfadsgdsgs');
        $this->output->writeLn('adsfadsgdsgs');
        $this->output->write('hey');
    }
}
