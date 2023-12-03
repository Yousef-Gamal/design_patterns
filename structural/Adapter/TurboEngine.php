<?php

namespace structural\Adapter;

class TurboEngine implements TurboInterface
{

    public function startTurbo(): string
    {
        return "Turbo engine starts";
    }
}