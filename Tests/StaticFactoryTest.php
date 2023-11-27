<?php

use creational\StaticFactory\BENZCar;
use creational\StaticFactory\BMWCar;
use creational\StaticFactory\StaticFactory;

class StaticFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testCanCreateBMWCar(){
        $this->assertInstanceOf(BMWCar::class,StaticFactory::factory("BMW"));
    }
    public function testCanCreateBENZCar(){
        $this->assertInstanceOf(BENZCar::class,StaticFactory::factory("BENZ"));
    }
}