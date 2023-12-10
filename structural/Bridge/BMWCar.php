<?php

namespace structural\Bridge;

class BMWCar extends Car
{
    public function __Construct(CarColor $carColor)
    {
        parent::__construct($carColor);
    }

    public function getProduct(): string
    {
        return sprintf("The Car type is %s and the color is %s",'BMW',$this->carColor->getColor());
    }
}