<?php

namespace Shapes;

class ShapeWithBaseHeight extends Shape
{
    private $base;
    private $height;

   /**
   * Constructor of a geometric shape
   * @param   double  $base
   * @param   double  $height
   */
    function __construct($base = null, $height = null)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function getBase(){
        return $this->base;
    }

    public function getHeight(){
        return $this->height;
    }

}