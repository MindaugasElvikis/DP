<?php

namespace App\AbstractFactory;

/**
 * Class JsonText.
 */
class JsonText extends Text
{
    /**
     * @return string
     */
    public function getContent(): string
    {
        return json_encode([
            'content' => $this->text,
        ]);
    }
}
