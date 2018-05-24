<?php

namespace App\Decorator;

/**
 * Class ChoiceType.
 */
class ChoiceType extends Decorator
{
    /**
     * @return string
     */
    protected function getType(): string
    {
        return 'radio';
    }
}
