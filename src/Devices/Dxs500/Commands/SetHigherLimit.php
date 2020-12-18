<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Commands;

use kbATeam\MeasureInstruments\Devices\Dxs500\FloatParamCommandNoReturn;

/**
 * Class SetHigherLimit
 * Set higher current limit command.
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Commands
 */
class SetHigherLimit extends FloatParamCommandNoReturn
{
    public const COMMAND = 'HLIM';
}
