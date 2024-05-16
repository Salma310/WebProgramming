<?php
class Car2{
    private $brand;

    public function __construct($brand){
        echo "A new car is created. <br>";
        $this->brand = $brand;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function __destruct()
    {
        echo "The car is destroyed. <br>";
    }
}

$car = new Car2("Toyota");

echo "Brand : " . $car->getBrand() . "<br>";