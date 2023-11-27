<?php

namespace creational\Prototype;

class ManualCarPrototype extends AbstractCarPrototype
{
    protected string $model = 'Manual';

    public function __clone(){

    }
}