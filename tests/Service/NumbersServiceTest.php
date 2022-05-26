<?php

namespace App\Tests\Service;

use App\Service\NumbersService;
use PHPUnit\Framework\TestCase;


class NumbersServiceTest extends TestCase {

    private $service;

    protected function setUp(): void
    {
        $this->service = new NumbersService();
    }

    public function testAdditionOK()
    {
        // given
        $firstValue = 1;
        $secondValue = 2;

        // when 
        $result = $this->service->addNumbers($firstValue, $secondValue);

        // then
        $this->assertEquals(3, $result);
    }

    public function testAdditionKO()
    {
        // then
        $this->expectExceptionMessage("must be of the type float, string given");

        // given
        $firstValue = "a";
        $secondValue = "b";

        // when 
        $this->service->addNumbers($firstValue, $secondValue);
    }


    public function testDivisionOK()
    {
        // given
        $firstValue = 2;
        $secondValue = 4;

        // when 
        $result = $this->service->divideNumbers($firstValue, $secondValue);

        // then
        $this->assertEquals(0.5, $result);
    }

    public function testDivisionKO()
    {
        // then
        $this->expectExceptionMessage("cannot divide by zero");

        // given
        $firstValue = 1;
        $secondValue = 0;

        // when 
        $this->service->divideNumbers($firstValue, $secondValue);
    }
}
