<?php

namespace structural\Adapter;

class TurboEngineAdapter implements EngineInterface
{
    public function __Construct(private TurboEngine $engine){
    }
    public function startEngine(): string
    {
        return $this->engine->startTurbo();
    }
}