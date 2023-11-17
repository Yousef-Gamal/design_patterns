<?php

namespace creational\Factory;

class BMWBrandFactory implements BrandFactory
{

    public function BuildBrand()
    {
       return new BMWBrand();
    }
}