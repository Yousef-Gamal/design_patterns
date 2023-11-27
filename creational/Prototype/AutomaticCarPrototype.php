<?php

namespace creational\Prototype;

class AutomaticCarPrototype extends AbstractCarPrototype
{
    protected string $model = 'Automatic';

    public function __clone(){

    }
}