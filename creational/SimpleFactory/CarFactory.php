<?php

namespace creational\SimpleFactory;

class CarFactory
{
    public function createCar(string $company): Car
    {
        return new Car('BMW');
    }
}
