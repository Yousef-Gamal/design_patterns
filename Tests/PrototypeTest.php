<?php

namespace Tests;

use creational\Prototype\AutomaticCarPrototype;
use creational\Prototype\ManualCarPrototype;

class PrototypeTest extends \PHPUnit\Framework\TestCase
{
    public function testCanCreateAutomaticCarsWithClone(){
        $automaticPrototypeCar = new AutomaticCarPrototype("BMW");
        for($i = 0;$i < 10;$i++){
            $newCar = clone $automaticPrototypeCar;

            $this->assertInstanceOf(AutomaticCarPrototype::class,$newCar);
        }
    }
    public function testCanCreateManualCarsWithClone(){
        $manualPrototypeCar = new ManualCarPrototype("Honda");
        for($i = 0;$i < 10;$i++){
            $newCar = clone $manualPrototypeCar;

            $this->assertInstanceOf(ManualCarPrototype::class,$newCar);
        }
    }
}