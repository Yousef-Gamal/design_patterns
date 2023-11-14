<?php

namespace creational\Builder;

use creational\Builder\Models\{Car, Benz};

class BenzCarBuilder implements CarBuilderInterface
{
    private Car $type;
    public function createCar(): void{
        $this->type = new Benz();
    }
    public function addEngine(): void{
        $this->type->setPart("Engine","300 Horse Power");
    }
    public function addDoors(): void{
        $this->type->setPart("Door","doors");
    }
    public function addBody(): void{
        $this->type->setPart("Body","body value");
    }
    public function addWheel(): void{
        $this->type->setPart("Wheel","wheel value");
    }
    public function getCar(): Car{
        return $this->type;
    }
}