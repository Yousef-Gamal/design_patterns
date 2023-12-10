<?php

namespace structural\Composite;

use structural\Composite\GiftComponent;
use structural\Composite\ProductComponent;

class GiftBox implements ProductComponent, GiftComponent
{
    public function __construct(private float $price,private float $gift){}

    public function getPrice(): float
    {
        return $this->price + $this->giftPrice();
    }

    public function giftPrice(): float
    {
        return $this->gift;
    }
}