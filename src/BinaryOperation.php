<?php

namespace Operations;

interface BinaryOperation
{
    public function __invoke(int $x, int $y);
};
