<?php

namespace Tests;

use Operations\Add;
use Operations\WrongTypeException;
use PHPUnit\Framework\TestCase;

class AddTest extends TestCase
{
    /** @test */
    public function onePlusOne()
    {
        $add = new Add();
        $this->assertEquals(2, $add->__invoke(1, 1));
    }

    /** @test */
    public function zeroPlusOne()
    {
        $add = new Add();
        $this->assertEquals(1, $add->__invoke(0, 1));
    }

    /** @test */
    public function negativeOnePlusOne()
    {
        $add = new Add();
        $this->assertEquals(0, $add->__invoke(-1, 1));
    }

    /** @test */
    public function wrongParameter()
    {
        $this->expectException(WrongTypeException::class);
        $add = new Add();
        $add->__invoke('notANumber', 1);
    }

    /** @test */
    public function boolParameter()
    {
        $this->expectException(WrongTypeException::class);
        $add = new Add();
        $add->__invoke(3, true);
    }

    /** @test */
    public function floatParameter()
    {
        $this->expectException(WrongTypeException::class);
        $add = new Add();
        $add->__invoke(3, 1.5);
    }
}