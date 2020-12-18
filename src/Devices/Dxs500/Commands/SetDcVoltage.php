<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Commands;

use kbATeam\MeasureInstruments\Devices\Dxs500\FloatParamCommandNoReturn;

/**
 * Class SetDcVoltage
 * Set DC voltage command.
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Commands
 */
class SetDcVoltage extends FloatParamCommandNoReturn
{
    public const COMMAND = 'DCV';
}
