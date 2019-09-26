<?php

namespace Operations;

class Add implements BinaryOperation
{
    public function __invoke(int $x, int $y)
    {
        return $x + $y;
    }
}
