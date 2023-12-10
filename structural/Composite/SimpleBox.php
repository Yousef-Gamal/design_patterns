<?php

namespace structural\Composite;

use structural\Composite\ProductComponent;

class SimpleBox implements ProductComponent
{
    public function __Construct(private float $price){}
    public function getPrice(): float
    {
        return $this->price;
    }
}