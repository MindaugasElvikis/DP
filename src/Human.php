<?php

namespace App;

/**
 * Class Human.
 */
final class Human
{
    /**
     * @var Human
     */
    private static $human;

    /**
     * @var int
     */
    private $a;

    /**
     * @var int
     */
    private $b;

    /**
     * Human constructor.
     */
    private function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @return Human
     */
    public static function getHuman(): Human
    {
        if (null === static::$human) {
            static::$human = new static(1, 2);
        }

        return static::$human;
    }

    /**
     * @return int
     */
    public function getA(): int
    {
        return $this->a;
    }

    /**
     * @return int
     */
    public function getB(): int
    {
        return $this->b;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
