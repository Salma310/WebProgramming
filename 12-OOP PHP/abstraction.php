<?php
abstract class Shape{
    abstract public function calculatedArea();
}


class Circle extends Shape{
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

class Rectangle extends Shape{
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

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

echo "Area of Circle: " . $circle->calculatedArea() . "<br>";
echo "Area of Rectangle: " . $rectangle->calculatedArea() . "<br>";
// function printArea(Shape $shape){
//     echo "Area : ".$shape->calculatedArea() . "<br>";
// }


// printArea($circle);
// printArea($rectangle);
?>