<?php

namespace Tests;

use Operations\Composition;
use Operations\Add;
use Operations\Subtract;
use Operations\WrongTypeException;
use PHPUnit\Framework\TestCase;

class CompositionTest extends TestCase
{
    /** @test */
    public function firstCase()
    {
        $newOperation = new Composition(new Add(), new Subtract());
        $this->assertEquals((1 + 2 - 3) / 2, $newOperation->__invoke(1, 2, 3));
    }

    /** @test */
    public function secondCase()
    {
        $newOperation = new Composition(new Add(), new Subtract());
        $this->assertEquals((5 + 3 - 6) / 2, $newOperation->__invoke(5, 3, 6));
    }

    /** @test */
    public function wrongParameter()
    {
        $this->expectException(WrongTypeException::class);
        $newOperation = new Composition(new Add(), new Subtract());
        $newOperation->__invoke('notANumber', 1, 0);
    }

}