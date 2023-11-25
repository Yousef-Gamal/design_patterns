<?php

namespace creational\Pool;

class CarPool
{
    private $freeCars = [];
    private $busyCars = [];

    public function rentCar(): Car{
        $car = (empty($this->freeCars)) ? new Car() : array_pop($this->freeCars);
        $this->busyCars[spl_object_hash($car)] = $car; // create hash index for the car object created

        return $car;
    }
    public function freeCar(Car $car): void{
        $carId = spl_object_hash($car);

        if(isset($this->busyCars[$carId])){
            unset($this->busyCars[$carId]);
            $this->freeCars[$carId] = $car;
        }
    }
    public function getReport(): int{
        return count($this->freeCars) + count($this->busyCars);
    }
}