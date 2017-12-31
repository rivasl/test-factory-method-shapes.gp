<?php

namespace Shapes;

class ShapeFactory{

   /**
   * Build a new geometric shape
   * @param   string  $type
   * @param   double  $diameter
   * @param   double  $base
   * @param   double  $height
   * @return  Object Shape
   */
    public static function Create($type = null, $diameter = null, $base = null, $height = null)
    {
        switch ($type) {
            case 'Circle':
                $shape = new Circle($diameter);
                break;
            case 'Square':
                $shape =  new Square($base, $height);
                break;
            case 'Triangle':
                $shape =  new Triangle($base, $height);
                break;
            default:
                throw new \Exception("Invalid Type");
                break;
        }

        return $shape;
    }

}