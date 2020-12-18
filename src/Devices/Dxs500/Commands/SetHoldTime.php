<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Commands;

use kbATeam\MeasureInstruments\Devices\Dxs500\IntegerParamCommandNoReturn;

/**
 * Class SetHoldTime
 * Set hold time command.
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Commands
 */
class SetHoldTime extends IntegerParamCommandNoReturn
{
    public const COMMAND = 'HTIM';
}
