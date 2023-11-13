<?php

namespace creational\Builder\Models;

class Benz
{
    private $data = [];

    public function setPart($name,$value): void{
        $this->data[$name] = $value;
    }
}