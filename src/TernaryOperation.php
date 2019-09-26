<?php

namespace Operations;

interface TernaryOperation
{
    public function __invoke(int $x, int $y, int $z);
};
