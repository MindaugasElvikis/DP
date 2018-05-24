<?php

namespace App\FactoryMethod;

/**
 * Interface FactoryMethod.
 */
interface FactoryMethod
{
    /**
     * @param string $content
     *
     * @return Text
     */
    public function createText(string $content): Text;
}
