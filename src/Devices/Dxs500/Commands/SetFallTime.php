<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Commands;

use kbATeam\MeasureInstruments\Devices\Dxs500\IntegerParamCommandNoReturn;

/**
 * Class SetFallTime
 * Set fall time command.
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Commands
 */
class SetFallTime extends IntegerParamCommandNoReturn
{
    public const COMMAND = 'FTIM';
}
