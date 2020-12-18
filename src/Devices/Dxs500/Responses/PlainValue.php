<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Responses;

use kbATeam\ByteDebug\ToString;

/**
 * Class PlainValue
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Responses
 */
class PlainValue implements \kbATeam\SerialPort\Interfaces\Communication\Value
{
    /**
     * @var string
     */
    private $value;

    /**
     * PlainValue constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @inheritDoc
     */
    public function get(): string
    {
        return $this->value;
    }

    /**
     * @inheritDoc
     */
    public function getUnit(): ?string
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return ToString::fromString($this->value);
    }
}
