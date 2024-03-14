<?php 

class Car {
    public $model;
    private $color;

    private $name;

    public $speed;

    function __construct($carmodel, $carcolor, $carname, $carspeed){
        $this->speed = $carmodel;
        $this->color = $carcolor;
        $this->name = $carname;
        $this->speed = $carspeed;
    }

    function __destruct(){

    }

    function drive(){
        echo "$this->name is driving at a speed $this->speed \n";
    }

    public function getName(){
        return $this->name;
    }

    public function setName($newName){
        $this->name = $newName;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($newColor){
        $this->color = $newColor;
    }

}





$car1 = new Car("Toyota", "White", "Toyota", "60km/hr");
$car1->drive();
$car1->setName("Benz");
$car1->drive();


echo $car1->getName();
$car1->__destruct();