<?php

namespace App\AbstractFactory;

/**
 * Class AbstractFactory.
 */
abstract class AbstractFactory
{
    /**
     * @param string $content
     *
     * @return Text
     */
    abstract public function createText(string $content): Text;
}
