<?php

namespace creational\Prototype;

abstract class AbstractCarPrototype
{
    protected String $model;
    private String $flag;

    public function __Construct(String $flag){
        $this->flag = $flag;
    }
    abstract function __clone();
    public function getFlag()
    {
        return $this->flag;
    }

}