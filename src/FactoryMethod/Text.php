<?php

namespace App\FactoryMethod;

/**
 * Class Text.
 */
abstract class Text
{
    /**
     * @var string
     */
    protected $text;

    /**
     * Text constructor.
     *
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    abstract public function getContent(): string;
}
