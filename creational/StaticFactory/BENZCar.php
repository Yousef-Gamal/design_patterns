<?php

namespace creational\StaticFactory;

class BENZCar implements Car
{
    public function model(): string{
        return "BENZ";
    }
}