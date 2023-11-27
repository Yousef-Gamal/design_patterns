<?php

use creational\SimpleFactory\{Car,CarFactory};

class SimpleFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testCanCreateCar(){
        $factory = new CarFactory();
        $BMW = $factory->createCar('BMW');

        $this->assertInstanceOf(Car::class,$BMW);
    }
}