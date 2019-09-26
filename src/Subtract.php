<?php

namespace Operations;

class Subtract implements BinaryOperation
{
    public function __invoke(int $x, int $y)
    {
        return $x - $y;
    }
}
