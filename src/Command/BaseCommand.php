<?php

namespace App\Command;

/**
 * Class BaseCommand.
 */
abstract class BaseCommand implements CommandInterface
{
    /**
     * @var Receiver
     */
    protected $output;

    /**
     * BaseCommand constructor.
     *
     * @param Receiver $receiver
     */
    public function __construct(Receiver $receiver)
    {
        $this->output = $receiver;
    }
}
