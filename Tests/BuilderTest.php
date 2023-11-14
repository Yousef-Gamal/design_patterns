<?php

class BuilderTest extends \PHPUnit\Framework\TestCase
{
    public function testProduceBMW(){
        $BMWCarBuilder = new \creational\Builder\BMWCarBuilder();
        $CarProducer = new \creational\Builder\CarProducer($BMWCarBuilder);
        $myCar = $CarProducer->produceCar();

        $this->assertInstanceOf(\creational\Builder\Models\BMW::class,$myCar);
    }
    public function testProduceBenz(){
        $BenzCarBuilder = new \creational\Builder\BMWCarBuilder();
        $CarProducer = new \creational\Builder\CarProducer($BenzCarBuilder);
        $myCar = $CarProducer->produceCar();

        $this->assertInstanceOf(\creational\Builder\Models\BMW::class,$myCar);
    }
}