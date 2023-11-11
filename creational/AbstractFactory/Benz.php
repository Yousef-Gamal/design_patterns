<?php
declare(strict_types=1);
namespace creational\AbstractFactory;


class Benz implements CarInterface{

    public function __construct(
            private float $price,
            private float $tax
        ){
        $this->price = $price;
        $this->tax = $tax;
    }
    public function calculatePrice(): float{
        return $this->price + $this->tax + 200_000;
    }
}