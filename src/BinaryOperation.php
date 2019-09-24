<?php

namespace Operations;

interface BinaryOperation
{
    public function __invoke($x, $y);
}