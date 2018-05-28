<?php

namespace App\Composite;

/**
 * Class InputElement.
 */
class InputElement implements RenderableInterface
{
    use HasClass;

    /**
     * @return string
     */
    public function render(): string
    {
        return $this->appendClass('<input type="text" />');
    }
}
