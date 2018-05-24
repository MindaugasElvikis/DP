<?php

namespace App\AbstractFactory;

/**
 * Class HtmlFactory.
 */
class HtmlFactory extends AbstractFactory
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
