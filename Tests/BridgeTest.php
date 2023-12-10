<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use structural\Bridge\BENZCar;
use structural\Bridge\BlueCar;
use structural\Bridge\BMWCar;
use structural\Bridge\RedCar;

class BridgeTest extends TestCase
{
    public function testCanCreateBlueBMWCar()
    {
        $carColor = new BlueCar();
        $bmw = new BMWCar($carColor);

        $this->assertEquals("The Car type is BMW and the color is Blue",$bmw->getProduct());
    }
    public function testCanCreateBlueBENZCar()
    {
        $carColor = new RedCar();
        $benz = new BENZCar($carColor);

        $this->assertEquals("The Car type is BENZ and the color is Red",$benz->getProduct());
    }
}