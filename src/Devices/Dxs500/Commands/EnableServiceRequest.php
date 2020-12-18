<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Commands;

use kbATeam\MeasureInstruments\Devices\Dxs500\SimpleCommandNoReturn;

/**
 * Class EnableServiceRequest
 * Enable service request command.
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Commands
 */
class EnableServiceRequest extends SimpleCommandNoReturn
{
    public const COMMAND = 'SRQ';
}
