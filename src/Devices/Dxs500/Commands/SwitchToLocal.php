<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Commands;

use kbATeam\MeasureInstruments\Devices\Dxs500\SimpleCommandNoReturn;

/**
 * Class SwitchToLocal
 * Switch to local command.
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Commands
 */
class SwitchToLocal extends SimpleCommandNoReturn
{
    public const COMMAND = 'GTL';
}
