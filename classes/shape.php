<?php

namespace Shapes;

abstract class Shape
{
    private $type;
    private $base;
    private $height;
    private $diameter;

   /**
   * Constructor of a geometric shape
   * @param   string  $type
   * @param   double  $diameter
   * @param   double  $base
   * @param   double  $height
   */
    function __construct($type = '', $base = null, $height = null, $diameter = null)
    {
        $this->type = $type;
        $this->base = $base;
        $this->height = $height;
        $this->diameter = $diameter;
    }

    public function getType(){
        return $this->type;
    }

    public function getBase(){
        return $this->base;
    }

    public function getHeight(){
        return $this->height;
    }

}