<?php

namespace App\Bridge;

/**
 * Class LogsPrinterService.
 */
class LogsPrinterService extends BaseService
{
    /**
     * @param string $string
     *
     * @return string
     */
    public function get(): string
    {
        $logs = $this->logger->getLogs();

        return $this->formatter->format($logs);
    }
}
