<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Commands;

use kbATeam\MeasureInstruments\Devices\Dxs500\SimpleCommandNoReturn;

/**
 * Class Stop
 * Stop command.
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Commands
 */
class Stop extends SimpleCommandNoReturn
{
    public const COMMAND = 'STOP';
}
