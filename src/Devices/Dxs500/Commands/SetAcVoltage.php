<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Commands;

use kbATeam\MeasureInstruments\Devices\Dxs500\FloatParamCommandNoReturn;

/**
 * Class SetAcVoltage
 * Set AC voltage command.
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Commands
 */
class SetAcVoltage extends FloatParamCommandNoReturn
{
    public const COMMAND = 'ACV';
}
