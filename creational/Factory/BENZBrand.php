<?php

namespace creational\Factory;

use creational\Factory\CarBrandInterface;

class BENZBrand implements CarBrandInterface
{

    public function createBrand()
    {
        return BENZBrand::class;
    }
}