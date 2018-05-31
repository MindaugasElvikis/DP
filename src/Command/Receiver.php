<?php

namespace App\Command;

/**
 * Class Receiver.
 */
class Receiver
{
    /**
     * @var array
     */
    private $output;

    /**
     * Receiver constructor.
     */
    public function __construct()
    {
        $this->output = [];
    }

    /**
     * @param string $text
     *
     * @return $this
     */
    public function writeLn(string $text): self
    {
        $this->write(PHP_EOL . $text);

        return $this;
    }

    /**
     * @param string $text
     *
     * @return $this
     */
    public function write(string $text): self
    {
        $this->output[] = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getOutput(): string
    {
        return implode('', $this->output);
    }
}
