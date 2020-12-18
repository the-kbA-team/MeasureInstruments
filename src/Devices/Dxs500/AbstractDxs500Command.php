<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500;

use kbATeam\MeasureInstruments\Devices\Dxs500\Responses\EmptyResponse;
use kbATeam\MeasureInstruments\Streams\Readers\Terminated;
use kbATeam\MeasureInstruments\Streams\Timeouts\Seconds;
use kbATeam\SerialPort\Interfaces\Communication\Command;
use kbATeam\ByteDebug\ToString;
use kbATeam\SerialPort\Interfaces\Communication\Container;
use kbATeam\SerialPort\Interfaces\Stream;

/**
 * Class AbstractDxs500Command
 * @package kbATeam\MeasureInstruments\Devices\Dxs500
 */
abstract class AbstractDxs500Command implements Command
{
    protected const COMMAND = null;
    protected const COMMAND_TERMINATION = "\n";
    protected const READ_TERMINATION = "\x11";
    protected const READ_TIMEOUT = '5.0';

    /**
     * @inheritDoc
     */
    public function invoke(Stream $stream): ?Container
    {
        $stream->write($this->compileCommand());
        $reader = new Terminated($stream, static::READ_TERMINATION);
        $response = $reader->read(new Seconds(static::READ_TIMEOUT));
        return new EmptyResponse($response);
    }

    /**
     * Compile the command string.
     * @param string|null $command The optional command string.
     * @return string
     */
    protected function compileCommand(string $command = null): string
    {
        return static::COMMAND . static::COMMAND_TERMINATION;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return ToString::fromString($this->compileCommand());
    }
}
