<?php

namespace Operations;

interface BinaryOperation
{
    public function __invoke($x, $y);
};

interface TernaryOperation
{
    public function __invoke($x, $y, $z);
};
