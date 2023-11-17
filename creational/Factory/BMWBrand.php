<?php

namespace creational\Factory;

class BMWBrand implements CarBrandInterface
{
    public function createBrand(): string
    {
       return BMWBrand::class;
    }
}