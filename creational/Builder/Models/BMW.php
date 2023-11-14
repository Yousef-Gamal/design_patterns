<?php

namespace creational\Builder\Models;

class BMW extends Car
{
    private $data = [];

    public function setPart($name,$value): void{
        $this->data[$name] = $value;
    }
}