<?php

namespace creational\Pool;

class Car
{
    private \DateTime $rentAt;

    public function __Construct(){
        $this->rentAt = new \DateTime();
    }
    public function moveCar(): string{
        return "Car is moving";
    }
}