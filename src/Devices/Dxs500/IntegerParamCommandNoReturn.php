<?php

namespace kbATeam\MeasureInstruments\Devices\Dxs500;

/**
 * Class IntegerParamCommandNoReturn
 * @package kbATeam\MeasureInstruments\Devices\Dxs500
 */
abstract class IntegerParamCommandNoReturn extends AbstractDxs500Command
{
    /**
     * @var int The command parameter.
     */
    private int $parameter;

    /**
     * SetLowerLimit constructor.
     * @param int $parameter
     */
    public function __construct(int $parameter)
    {
        $this->setParameter($parameter);
    }

    /**
     * Set the command parameter.
     * @param int $parameter
     */
    public function setParameter(int $parameter): void
    {
        $this->parameter = $parameter;
    }

    /**
     * Get the command parameter.
     * @return int
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
            '%s %u',
            static::COMMAND,
            $this->getParameter()
        ));
    }
}
