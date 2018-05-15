<?php

require_once 'main/FigureFactory.php';

$circle = FigureFactory::create('Circle', 20);
$square = FigureFactory::create('Square', 40, 40);
$triangle = FigureFactory::create('Triangle', 5, 3);

echo PHP_EOL;
echo "Figures: circle, square, triangle" . PHP_EOL;

echo PHP_EOL;

echo $circle->getType(). PHP_EOL;
echo 'Diameter: '.$circle->getDiameter().' cm'. PHP_EOL;
echo 'Area: '.$circle->getArea().' cm2'. PHP_EOL;

echo PHP_EOL;

echo $square->getType(). PHP_EOL;
echo 'Base: '.$square->getBase().' cm'. PHP_EOL;
echo 'Height: '.$square->getHeight().' cm'. PHP_EOL;
echo 'Area: '.$square->getArea().' cm2'. PHP_EOL;

echo PHP_EOL;

echo $triangle->getType(). PHP_EOL;
echo 'Base: '.$triangle->getBase().' cm'. PHP_EOL;
echo 'Height: '.$triangle->getHeight().' cm'. PHP_EOL;
echo 'Area: '.$triangle->getArea().' cm2'. PHP_EOL;

echo PHP_EOL;
