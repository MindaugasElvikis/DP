<?php

namespace App\Command;

/**
 * Class ByeWorldCommand.
 */
class ByeWorldCommand extends BaseCommand
{
    /**
     * @return void
     */
    public function execute()
    {
        $this->output->writeLn('Ate ate');
    }
}
