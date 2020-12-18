<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Commands;

use kbATeam\MeasureInstruments\Devices\Dxs500\SimpleCommandNoReturn;

/**
 * Class Reset
 * Reset command.
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Commands
 */
class Reset extends SimpleCommandNoReturn
{
    public const COMMAND = '*RST';
}
