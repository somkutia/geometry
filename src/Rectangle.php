<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors",1);

class Rectangle{
    
private $a;
private $b;
    
public function __construct(float $a, float $b)
{
    $this->a = $a;
    $this->b = $b;

}

public function getSideA()
{
    return $this -> a;    
}
    
public function getSideB()
{
    return $this -> b;
}
public function getArea()
{
    return $this -> a* $this->b;
}

public function getPerimeter()
{
    return 2* ($this->a + $this->b);
}



}