<?php

namespace App\Composite;

/**
 * Class Form.
 */
class Form implements RenderableInterface
{
    use HasClass;

    /**
     * @var array|RenderableInterface[]
     */
    private $elements = [];

    /**
     * @return string
     */
    public function render(): string
    {
        $result = $this->appendClass('<form class="%s">');

        foreach ($this->elements as $element) {
            $result .= $element->render() . '<br>';
        }

        return $result . '</form>';
    }

    /**
     * @param RenderableInterface $renderable
     *
     * @return $this
     */
    public function addLement(RenderableInterface $renderable)
    {
        $this->elements[] = $renderable;

        return $this;
    }
}
