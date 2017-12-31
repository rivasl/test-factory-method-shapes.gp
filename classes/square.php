<?php

namespace Shapes;

/**
* Square shape class
*/
class Square extends Shape implements iShape 
{

    function __construct($base, $height)
    {
        parent::__construct('Square', $base, $height);
    }

    public function getArea(){
        return pow($this->getBase(), 2);
    }
}
