<?php

namespace creational\Builder;

use creational\Builder\Models\Car;
// Director
class CarProducer
{

    public function __Construct(private CarBuilderInterface $builder){
        $this->builder = $builder;
    }
    public function produceCar(): Car{
         $this->builder->createCar();
         $this->builder->addEngine();
         $this->builder->addBody();
         $this->builder->addDoors();
         $this->builder->addWheel();

         return $this->builder->getCar();
    }
}