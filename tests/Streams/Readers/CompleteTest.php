<?php

namespace Tests\kbATeam\MeasureInstruments\Streams\Readers;

use kbATeam\SerialPort\Interfaces\Stream;
use kbATeam\MeasureInstruments\Streams\Readers\Complete;
use kbATeam\MeasureInstruments\Streams\Timeouts\Seconds;
use PHPUnit\Framework\TestCase;

/**
 * Class CompleteTest
 * @package Tests\kbATeam\MeasureInstruments\Streams\Readers
 * @author  Gregor J.
 */
final class CompleteTest extends TestCase
{
    /**
     * Test reading from a stream until eof.
     */
    public function testRead(): void
    {
        $stream = $this->getMockBuilder(Stream::class)->getMock();
        $stream->expects(self::once())
            ->method('setTimeout')
            ->with(
                self::identicalTo(1),
                self::identicalTo(900000)
            );
        $stream->expects(self::exactly(3))
            ->method('readChar')
            ->will(self::onConsecutiveCalls('1', '2', null));
        /** @noinspection PhpParamsInspection */
        $reader = new Complete($stream);
        $timeout = new Seconds(1.9);
        $result = $reader->read($timeout);
        static::assertSame('12', $result);
    }
}
