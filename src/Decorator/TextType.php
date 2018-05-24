<?php

namespace App\Decorator;

/**
 * Class TextType.
 */
class TextType extends Decorator
{
    /**
     * @return string
     */
    protected function getType(): string
    {
        return 'text';
    }
}
