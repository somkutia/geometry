<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors",1);


class Tringle{

private $a;
private $b;
private $c;

public function __construct(float $a, float $b, float $c)
{
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
}

public function getSideA()
{
    return $this -> a;    
}
    
public function getSideB()
{
    return $this -> b;
}

public function getSideC()
{
    return $this -> c;
}

public function getArea()
{
    return ($this->a * $this->b)/2;
}

public function getPerimeter()
{
    return $this->a + $this->b + $this->c;
}






}