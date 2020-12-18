<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Commands;

use kbATeam\MeasureInstruments\Devices\Dxs500\SimpleCommandNoReturn;

/**
 * Class SwitchToRemote
 * Switch to remote command.
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Commands
 */
class SwitchToRemote extends SimpleCommandNoReturn
{
    public const COMMAND = 'REM';
}
