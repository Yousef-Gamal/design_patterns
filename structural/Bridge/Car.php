<?php

namespace structural\Bridge;

abstract class Car
{
    public function __Construct(protected CarColor $carColor){}
    abstract public function getProduct();
}