<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Commands;

use kbATeam\MeasureInstruments\Devices\Dxs500\IntegerParamCommandNoReturn;

/**
 * Class SetRiseTime
 * Set rise time command.
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Commands
 */
class SetRiseTime extends IntegerParamCommandNoReturn
{
    public const COMMAND = 'RTIM';
}
