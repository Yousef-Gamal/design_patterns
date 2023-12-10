<?php

namespace structural\Bridge;

class BENZCar extends Car
{
    public function __Construct(CarColor $carColor)
    {
        parent::__construct($carColor);
    }

    public function getProduct()
    {
        return sprintf("The Car type is %s and the color is %s",'BENZ',$this->carColor->getColor());
    }
}