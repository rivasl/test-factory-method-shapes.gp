<?php 

// load Composer
require_once __DIR__ . '/vendor/autoload.php';

$circle = Shapes\ShapeFactory::Create('Circle', 20);
echo "Circle - Area: ".$circle->getArea().PHP_EOL;
echo "Circle - Base: ".$circle->getBase().PHP_EOL;

$square = Shapes\ShapeFactory::Create('Square', 0, 30, 30);
echo "Square - Area: ".$square->getArea().PHP_EOL;

$triangle = Shapes\ShapeFactory::Create('Triangle', 0, 30, 30);
echo "Triangle - Area: ".$triangle->getArea().PHP_EOL;
echo "Triangle - Base: ".$triangle->getBase().PHP_EOL;

