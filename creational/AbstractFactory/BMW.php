<?php
declare(strict_types=1);
namespace creational\AbstractFactory;


class BMW implements CarInterface{

    public function __construct(private float $price){
        $this->price = $price;
    }
    public function calculatePrice(): float{
        return $this->price + 120_000;
    }
}