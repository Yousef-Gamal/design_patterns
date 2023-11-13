<?php

namespace creational\Builder\Models;

class BMW
{
    private $data = [];

    public function setPart($name,$value): void{
        $this->data[$name] = $value;
    }
}