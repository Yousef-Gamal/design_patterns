<?php

namespace Tests;

use creational\Factory\BENZBrand;
use creational\Factory\BENZBrandFactory;
use creational\Factory\BMWBrand;
use creational\Factory\BMWBrandFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testcanBuildBMWBrand(){
        $brandFactory = new BMWBrandFactory();
        $myBrand = $brandFactory->BuildBrand();

        $this->assertInstanceOf(BMWBrand::class,$myBrand);
    }
    public function testcanBuildBENZBrand(){
        $brandFactory = new BENZBrandFactory();
        $myBrand = $brandFactory->BuildBrand();

        $this->assertInstanceOf(BENZBrand::class,$myBrand);
    }
}