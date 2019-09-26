<?php

namespace Operations;

class Composition implements TernaryOperation
{
    private $add;
    private $sub;

    public function __construct(BinaryOperation $add, BinaryOperation $sub)
    {
        $this->add = $add;
        $this->sub = $sub;
    }

    public function __invoke(int $x, int $y, int $z)
    {
        $r1 = $this->add->__invoke($x, $y);
        $r2 = $this->sub->__invoke($r1, $z);

        return $r2 / 2;
    }
}
