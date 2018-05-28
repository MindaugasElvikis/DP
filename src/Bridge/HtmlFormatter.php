<?php

namespace App\Bridge;

/**
 * Class HtmlFormatter.
 */
class HtmlFormatter implements FormatterInterface
{
    /**
     * @param array $data
     *
     * @return string
     */
    public function format(array $data): string
    {
        return implode('<br>', array_map(function (string $log) {
            return sprintf('<p>%s</p>', $log);
        }, $data));
    }
}
