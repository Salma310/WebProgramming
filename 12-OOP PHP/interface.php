<?php
interface Shape{
    public function calculatedArea();
}

interface Color{
    public function getColor();
}

class Circle implements Shape, Color{
    private $radius;
    private $color;

    public function __construct($radius, $color){
        $this->radius = $radius;
        $this->color = $color;
    }
    
    public function calculatedArea(){
        return pi() *pow($this->radius, 2);
    }

    public function getColor(){
        return $this->color;
    } 
}

$circle = new Circle(5, "Blue");

echo "Area of Circle: " . $circle->calculatedArea() . "<br>";
echo "Color of Circle: " . $circle->getColor() . "<br>";

?>