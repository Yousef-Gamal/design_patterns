<?php

namespace structural\Adapter;

class NormalEngine implements EngineInterface
{

    public function startEngine(): string
    {
        return "Normal engine starts";
    }
}