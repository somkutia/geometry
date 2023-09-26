<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors",1);

//namespace Acme\Geometry\Math\;

class Circle{

    private $r;

    public function __construct(float $r)
    {
        $this->r = $r;

    }

    
    public function getRadius()
    {
        return $this->r;    
    }


    public function getDiameter()
    {
        return $this->r*2;
    }


    public function getArea()
    {
        return $this->r*$this->r*pi();
    }


    public function getCircumference()
    {
        return $this->r*2*pi();

    }
}


