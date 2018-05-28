<?php

namespace App\Bridge;

interface FormatterInterface
{
    /**
     * @param string $text
     *
     * @return string
     */
    public function format(array $data): string;
}
