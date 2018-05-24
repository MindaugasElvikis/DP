<?php

namespace App\FactoryMethod;

/**
 * Class JsonFactory.
 */
class JsonFactory implements FactoryMethod
{
    /**
     * @param string $content
     *
     * @return Text
     */
    public function createText(string $content): Text
    {
        return new JsonText($content);
    }
}
