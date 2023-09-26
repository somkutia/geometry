<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors",1);

//include('./src/Acme/Geometry/Math/Circle.php')
include("Circle.php");
include("Rectangle.php");
include("Square.php");
include("Tringle.php");
//use Acme\Geometry\Math\Circle;

$kor = new Circle(10);
echo $kor->getRadius() . PHP_EOL;
echo $kor->getDiameter() . PHP_EOL;
echo $kor->getArea() . PHP_EOL;
echo $kor->getCircumference() . PHP_EOL;

$teglalap = new Rectangle(5, 6);
echo $teglalap-> getSideA() . PHP_EOL;
echo $teglalap-> getSideB(). PHP_EOL;
echo $teglalap-> getArea(). PHP_EOL;
echo $teglalap-> getPerimeter(). PHP_EOL;

$negyzet = new Square(5, 6);
echo $negyzet-> getSide() . PHP_EOL;
echo $negyzet-> getArea() . PHP_EOL;
echo $negyzet-> getPerimeter() . PHP_EOL;

$haromszog = new Tringle(5, 6, 7);
echo $haromszog-> getSideA() . PHP_EOL;
echo $haromszog-> getArea() . PHP_EOL;
echo $haromszog-> getPerimeter() . PHP_EOL;
echo $haromszog-> getSideB() . PHP_EOL;
echo $haromszog-> getSideC() . PHP_EOL;

