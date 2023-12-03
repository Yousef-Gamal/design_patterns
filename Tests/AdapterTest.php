<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use structural\Adapter\{TurboEngineAdapter,NormalEngine,Car,TurboEngine};

class AdapterTest extends TestCase
{
    public function testCanStartNormalEngine(){
        $engine = new NormalEngine();
        $car = new Car($engine);

        $this->assertEquals("Normal engine starts",$car->start());
    }
    public function testCanStartTurboEngine(){
        $engine = new TurboEngine();
        $adapter = new TurboEngineAdapter($engine);
        $car = new Car($adapter);

        $this->assertEquals("Turbo engine starts",$car->start());
    }
}