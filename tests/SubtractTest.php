<?php

namespace Tests;

use Operations\Subtract;
use Operations\WrongTypeException;
use PHPUnit\Framework\TestCase;

class SubtractTest extends TestCase
{
    /** @test */
    public function fourMinusTwo()
    {
        $subtract = new Subtract();
        $result = $subtract->__invoke(4, 2);
        $this->assertIsInt($result);
        $this->assertEquals(2, $result);
    }

    /** @test */
    public function twoMinusTwo()
    {
        $subtract = new Subtract();
        $result = $subtract->__invoke(2, 2);
        $this->assertIsInt($result);
        $this->assertEquals(0, $result);
    }
    /** @test */
    public function twoMinusFour()
    {
        $subtract = new Subtract();
        $result = $subtract->__invoke(2, 2);
        $this->assertIsInt($result);
        $this->assertEquals(0, $result);
    }

    /** @test */
    public function wrongParameter()
    {
        $this->expectException(\TypeError::class);
        $subtract = new Subtract();
        $subtract->__invoke('notANumber', 1);
    }
}
