<?php

namespace App\Decorator;

/**
 * Class InputGroupType.
 */
class InputGroupType implements InputInterface
{
    /**
     * @return array|string
     */
    public function render()
    {
        return [
            'Name',
            'LastName',
            'age',
        ];
    }
}
