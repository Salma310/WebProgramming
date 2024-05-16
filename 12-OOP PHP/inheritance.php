<?php
class Animal1{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function eat(){
        echo $this->name . " is eating. <br>";
    }

    public function sleep(){
        echo $this->name . " is sleeping. <br>";
    }
}

class Cat1 extends Animal1{
    public function meow(){
        echo $this->name . " says meow! <br>";
    }
}

class Dog1 extends Animal1{
    public function bark(){
        echo $this->name . " says woof! <br>";
    }
}

$cat = new Cat1("Whiskers");
$dog = new Dog1("Buddy");

$cat->eat();
$dog->sleep();

$cat->meow();
$dog->bark();
?>