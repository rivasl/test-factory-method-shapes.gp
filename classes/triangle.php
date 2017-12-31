<?php

namespace Shapes;

/**
* Triangle shape class
*/
class Triangle extends Shape implements iShape
{

    function __construct($base, $height)
    {
        parent::__construct('Triangle', $base, $height, null);
    }

    public function getArea(){
        return ($this->getBase() * $this->getHeight()) / 2;
    }
}
