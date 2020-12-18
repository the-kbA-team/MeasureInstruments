<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Commands;

use kbATeam\MeasureInstruments\Devices\Dxs500\SimpleCommandNoReturn;

/**
 * Class UseHiPot
 * Switch to high potential measurement type command.
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Commands
 */
class UseHiPot extends SimpleCommandNoReturn
{
    public const COMMAND = 'HIP';
}
