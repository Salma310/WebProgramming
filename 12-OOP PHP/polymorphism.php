<?php
interface Shape1{
    public function calculatedArea();
}

class Circle1 implements Shape1{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculatedArea()
    {   
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle1 implements Shape1{
    private $width;
    private $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
    public function calculatedArea(){
        return $this-> width * $this-> height;
    }
}

function printArea(Shape1 $shape){
    echo "Area : ".$shape->calculatedArea() . "<br>";
}

$circle = new Circle1(5);
$rectangle = new Rectangle1(4, 6);

printArea($circle);
printArea($rectangle);
?>