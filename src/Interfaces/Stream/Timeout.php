<?php

namespace kbATeam\MeasureInstruments\Interfaces\Stream;

/**
 * Interface StreamTimeout
 * @package kbATeam\MeasureInstruments\Interfaces
 * @author  Gregor J.
 */
interface Timeout
{
    /**
     * Get the seconds part of the stream reading timeout.
     * @return int
     */
    public function getSeconds(): int;

    /**
     * Get the microseconds part of stream reading timeout.
     * @return int
     */
    public function getMicroseconds(): int;
}
