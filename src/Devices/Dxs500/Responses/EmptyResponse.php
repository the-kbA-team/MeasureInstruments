<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500\Responses;

use kbATeam\MeasureInstruments\Devices\AbstractResponse;

/**
 * Class EmptyResponse
 * @package kbATeam\MeasureInstruments\Devices\Dxs500\Responses
 */
class EmptyResponse extends AbstractResponse
{
    /**
     * AbstractResponse constructor.
     * @param string $response
     */
    public function __construct(string $response)
    {
        $this->add('0', new PlainValue($response));
    }
}
