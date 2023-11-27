<?php

namespace creational\StaticFactory;

class BMWCar implements Car
{
    public function model(): string{
        return "BMW";
    }
}