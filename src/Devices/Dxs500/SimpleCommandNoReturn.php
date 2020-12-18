<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500;

use kbATeam\ByteDebug\ToString;
use kbATeam\SerialPort\Interfaces\Communication\Command;
use kbATeam\SerialPort\Interfaces\Communication\Container;
use kbATeam\SerialPort\Interfaces\Stream;

/**
 * Class SimpleCommandNoReturn
 * @package kbATeam\MeasureInstruments\Devices\Dxs500
 */
abstract class SimpleCommandNoReturn extends AbstractDxs500Command
{
    /**
     * @inheritDoc
     */
    public function invoke(Stream $stream): ?Container
    {
        parent::invoke($stream);
        return null;
    }
}
