<?php

namespace creational\Factory;

class BENZBrandFactory implements BrandFactory
{

    public function BuildBrand()
    {
        return new BENZBrand();
    }
}