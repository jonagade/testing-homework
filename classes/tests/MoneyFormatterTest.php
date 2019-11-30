<?php

namespace Homework\Tests;

use Homework\MoneyFormatter;
use Homework\NumberFormatter;
use PHPUnit\Framework\TestCase;

class MoneyFormatterTest extends TestCase
{
    /**
     * @var NumberFormatter
     */
    private $sut;

    public function setUp(): void
    {
        $this->sut = new NumberFormatter($this->getNumberMock());
    }

    private function getNumberMock()
    {
        $mock = $this->getMockBuilder(NumberFormatter::class)
            ->disableOriginalConstructor()
            ->getMock();

        return $mock;
    }
}
