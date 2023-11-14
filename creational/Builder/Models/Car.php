<?php

namespace creational\Builder\Models;

abstract class Car
{
    abstract public function setPart($name,$value);
}