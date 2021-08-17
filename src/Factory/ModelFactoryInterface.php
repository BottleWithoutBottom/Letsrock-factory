<?php

namespace Letsrock\Factory;
use Letsrock\CreatableModel\CreatableModel;

interface ModelFactoryInterface extends FactoryInterface
{
    public function makeByModel(CreatableModel $model, int $quantity): bool;
}