<?php

namespace structural\Adapter;

class Car
{
    public function __Construct(private EngineInterface $engine){
    }
    public function start(){
        return $this->engine->startEngine();
    }
}