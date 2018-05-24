<?php

namespace App\FactoryMethod;

/**
 * Class HtmlFactory.
 */
class HtmlFactory implements FactoryMethod
{
    /**
     * @param string $content
     *
     * @return Text
     */
    public function createText(string $content): Text
    {
        return new HtmlText($content);
    }
}
