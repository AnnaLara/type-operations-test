<?php

namespace Operations;

class Add implements BinaryOperation
{
    public function __invoke($x, $y)
    {
        if (is_numeric($x) && is_numeric($y)) {
            return $x + $y;
        } else {
            throw new WrongTypeException();
        }
    }
}
