<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Commands;

use kbATeam\MeasureInstruments\Devices\Dxs500\FloatParamCommandNoReturn;

/**
 * Class SetLowerLimit
 * Set lower current or impedance limit command, depending on the measurement
 * type.
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Commands
 */
class SetLowerLimit extends FloatParamCommandNoReturn
{
    public const COMMAND = 'LLIM';
}
