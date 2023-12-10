<?php

namespace structural\Bridge;

use structural\Bridge\CarColor;

class BlueCar implements CarColor
{

    public function getColor()
    {
        return 'Blue';
    }
}