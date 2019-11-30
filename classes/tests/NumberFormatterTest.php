<?php

namespace Homework\Tests;

use Homework\NumberFormatter;
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{
    /**
     * @var NumberFormatter
     */
    private $number = null;

    public function setUp(): void
    {
        $this->number = New NumberFormatter(2000.2);
    }

    public function testEmpty()
    {
        $number = new NumberFormatter(null);
        $this->assertNull($number->getNumber());
    }

    /**
     * @dataProvider providerValidNumber
     * @param $expectedNumber
     */
    public function testValidNumber($expectedNumber)
    {
        $number = $this->number;
        $this->assertEquals($expectedNumber, $number->getNumber());
    }

    public function providerValidNumber(): float
    {
        return 12.2;
    }
}
