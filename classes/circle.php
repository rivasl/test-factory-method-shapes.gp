<?php

namespace Shapes;

/**
* Circle shape class
*/
class Circle extends Shape implements iShape
{
    
    private $diameter;
    const PI = 3.1415;

    public function __construct($diameter)
    {
        $this->diameter = $diameter;
    }

    public function getArea()
    {
        $ratio = $this->getDiameter() / 2;
        return self::PI * pow($ratio, 2);
    }

    public function getBase()
    {
        return "This shape not has base";
    }
    
    public function getHeight()
    {
        return "This shape not has height";
    }
    
    public function getDiameter(){
        return $this->diameter;
    }
}
