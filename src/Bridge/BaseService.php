<?php

namespace App\Bridge;

/**
 * Class BaseService.
 */
abstract class BaseService
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var FormatterInterface
     */
    protected $formatter;

    /**
     * BaseService constructor.
     *
     * @param FormatterInterface $formatter
     */
    public function __construct(LoggerInterface $logger, FormatterInterface $formatter)
    {
        $this->logger = $logger;
        $this->formatter = $formatter;
    }

    /**
     * @param string $string
     *
     * @return string
     */
    abstract public function get(): string;
}
