<?php

namespace kbATeam\MeasureInstruments\Devices;

use kbATeam\SerialPort\Exceptions\NotFoundException;
use kbATeam\SerialPort\Interfaces\Communication\Container;
use kbATeam\SerialPort\Interfaces\Communication\Value;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Class AbstractResponse
 * @package kbATeam\MeasureInstruments\Devices
 * @author  Gregor J.
 */
abstract class AbstractResponse implements Container
{
    /**
     * @var \kbATeam\SerialPort\Interfaces\Communication\Value[]
     */
    private $values = [];

    /**
     * Add a Value to the response.
     * @param string                                             $name
     * @param \kbATeam\SerialPort\Interfaces\Communication\Value $value
     */
    protected function add(string $name, Value $value): void
    {
        $this->values[$name] = $value;
    }

    /**
     * @inheritDoc
     */
    public function get(string $name): Value
    {
        if (!$this->has($name)) {
            throw new NotFoundException(
                sprintf('Response value \'%s\' not found!', $name)
            );
        }
        return $this->values[$name];
    }

    /**
     * @inheritDoc
     */
    public function has(string $name): bool
    {
        return array_key_exists($name, $this->values);
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return implode(' ', $this->values);
    }
}
