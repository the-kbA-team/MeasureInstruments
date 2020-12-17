<?php

namespace kbATeam\MeasureInstruments\Interfaces\Stream;

/**
 * Interface Reader
 * @package kbATeam\MeasureInstruments\Interfaces\Stream
 * @author  Gregor J.
 */
interface Reader
{
    /**
     * Read from a stream.
     * @param \kbATeam\MeasureInstruments\Interfaces\Stream\Timeout $timeout
     * @return string
     * @throws \kbATeam\SerialPort\Exceptions\StreamStateException
     * @throws \kbATeam\SerialPort\Exceptions\ReadException
     */
    public function read(Timeout $timeout): string;
}
