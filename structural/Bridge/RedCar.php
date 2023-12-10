<?php

namespace structural\Bridge;

use structural\Bridge\CarColor;

class RedCar implements CarColor
{

    public function getColor()
    {
        return 'Red';
    }
}