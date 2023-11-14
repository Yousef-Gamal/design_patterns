<?php
declare(strict_types= 1);
namespace creational\AbstractFactory;


class CarAbstractFactory{
    private float $tax = 100_000;
    private float $price;
    public function __construct($price){
        $this->price = $price;
    }
    public function createBMW(): BMW{
        return new BMW($this->price);
    }
    public function createBenz(): Benz{
        return new Benz(price: $this->price, tax: $this->tax);
    }
}