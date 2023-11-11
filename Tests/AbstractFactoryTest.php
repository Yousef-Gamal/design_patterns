<?php
namespace Tests;
use creational\AbstractFactory\{CarAbstractFactory, BMW, Benz};
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase{
    // private $carFactory;
    // public function setUp(): void{ // Set up the env for the new test case
    //     parent::setUp();
    //     $this->carFactory = new CarAbstractFactory(); // it need a price param
    // }
    // if it requries params so we don't need to use the set up
    public function testCanCreateBMW(){
        $carFactory = new CarAbstractFactory(200_000);
        $BMWCar = $carFactory->createBMW();

        $this->assertInstanceOf(BMW::class, $BMWCar); // compare the instance with its class
    }
    public function testCanCreateBenz(){
        $carFactory = new CarAbstractFactory(300_000);
        $BenzCar = $carFactory->createBenz();
        $failMessage = "Car is not Mercedes Benz";
        $this->assertInstanceOf(Benz::class, $BenzCar,$failMessage); // compare the instance with its class
    }
}