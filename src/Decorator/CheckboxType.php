<?php

namespace App\Decorator;

/**
 * Class CheckboxType.
 */
class CheckboxType extends Decorator
{
    /**
     * @return string
     */
    protected function getType(): string
    {
        return 'checkbox';
    }
}
