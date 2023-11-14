<?php

namespace creational\Builder\Models;

class Benz extends Car
{
    private $data = [];

    public function setPart($name,$value): void{
        $this->data[$name] = $value;
    }
}