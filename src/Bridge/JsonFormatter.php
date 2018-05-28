<?php

namespace App\Bridge;

/**
 * Class JsonFormatter.
 */
class JsonFormatter implements FormatterInterface
{
    /**
     * @param array $data
     *
     * @return string
     */
    public function format(array $data): string
    {
        return json_encode(['content' => $data]);
    }
}
