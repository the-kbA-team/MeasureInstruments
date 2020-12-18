<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500;

/**
 * Class FloatParamCommandNoReturn
 * @package kbATeam\MeasureInstruments\Devices\Dxs500
 */
abstract class FloatParamCommandNoReturn extends AbstractDxs500Command
{
    /**
     * @var float The command parameter.
     */
    private float $parameter;

    /**
     * Command constructor.
     * @param float $parameter
     */
    public function __construct(float $parameter)
    {
        $this->setParameter($parameter);
    }

    /**
     * Set the command parameter.
     * @param float $parameter
     */
    public function setParameter(float $parameter): void
    {
        $this->parameter = $parameter;
    }

    /**
     * Get the command parameter.
     * @return float
     */
    public function getParameter(): float
    {
        return $this->parameter;
    }

    /**
     * @inheritDoc
     */
    protected function compileCommand(): string
    {
        return parent::compileCommand(sprintf(
            '%s %F',
            static::COMMAND,
            $this->getParameter()
        ));
    }
}
