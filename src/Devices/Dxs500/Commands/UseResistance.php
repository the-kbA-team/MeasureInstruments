<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Commands;

use kbATeam\MeasureInstruments\Devices\Dxs500\SimpleCommandNoReturn;

/**
 * Class UseResistance
 * Switch to internal resistance measurement type command.
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Commands
 */
class UseResistance extends SimpleCommandNoReturn
{
    public const COMMAND = 'MEG';
}
