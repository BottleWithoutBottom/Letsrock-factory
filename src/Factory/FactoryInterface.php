<?php

namespace Letsrock\Factory;

interface FactoryInterface
{
    public function make(int $quantity): bool;
}