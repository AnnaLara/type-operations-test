<?php

namespace Operations;

class Add implements BinaryOperation
{
    public function __invoke($x, $y)
    {
        if (is_integer($x) && is_integer($y)) {
            return $x + $y;
        } else {
            throw new WrongTypeException();
        }
    }
}
