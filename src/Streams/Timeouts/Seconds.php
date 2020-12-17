<?php

namespace kbATeam\MeasureInstruments\Streams\Timeouts;

use kbATeam\MeasureInstruments\Exceptions\DomainException;
use kbATeam\MeasureInstruments\Interfaces\Stream\Timeout;
use function explode;
use function number_format;

/**
 * Class Seconds
 * @package kbATeam\MeasureInstruments\Streams\Timeouts
 * @author  Gregor J.
 */
final class Seconds implements Timeout
{
    /**
     * @var int
     */
    private $seconds;

    /**
     * @var int
     */
    private $microseconds;

    /**
     * Create a timeout from seconds.
     * @param float $seconds
     */
    public function __construct(float $seconds)
    {
        if ($seconds < 0) {
            throw new DomainException('Timeout below 0.');
        }
        $formatted = number_format($seconds, 6, '.', '');
        [$seconds, $microseconds] = explode('.', $formatted);
        $this->seconds = (int)$seconds;
        $this->microseconds = (int)$microseconds;
    }

    /**
     * @inheritDoc
     */
    public function getSeconds(): int
    {
        return $this->seconds;
    }

    /**
     * @inheritDoc
     */
    public function getMicroseconds(): int
    {
        return $this->microseconds;
    }
}
