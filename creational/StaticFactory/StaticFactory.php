<?php

namespace creational\StaticFactory;

class StaticFactory
{
    public static function factory(string $type){ // it's standard to call the function either factory or build
        if($type === 'BMW'){
            return new BMWCar();
        }
        if($type === 'BENZ'){
            return new BENZCar();
        }
        return null;
    }
}