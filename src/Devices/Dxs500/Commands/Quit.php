<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Commands;

use kbATeam\MeasureInstruments\Devices\Dxs500\SimpleCommandNoReturn;

/**
 * Class Quit
 * Quit command
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Commands
 */
class Quit extends SimpleCommandNoReturn
{
    public const COMMAND = 'QUIT';
}
