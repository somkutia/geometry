<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors",1);


class Square{

    private $a;
    
public function __construct(float $a)
{
    $this->a = $a;
}

public function getSide()
{
    return $this -> a;    
}
    

public function getArea()
{
    return $this -> a* $this->a;
}

public function getPerimeter()
{
    return 4*$this->a;
}









}