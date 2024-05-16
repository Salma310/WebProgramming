<?php
class Carl{
    public $brand;

    public function startEngine(){
        echo "Engine started!";
    }
}

$car1 = new Carl();
$car1->brand = "Toyota";

$car2 = new Carl();
$car2 ->brand = "Honda";

$car1->startEngine();
echo $car2->brand;
?>