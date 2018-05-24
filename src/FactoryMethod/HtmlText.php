<?php

namespace App\FactoryMethod;

/**
 * Class HtmlText.
 */
class HtmlText extends Text
{
    /**
     * @return string
     */
    public function getContent(): string
    {
        return sprintf('<p style="color: red;">%s</p>', $this->text);
    }
}
