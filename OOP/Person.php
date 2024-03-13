<?php 

class Person {

    // attributes / Properties
    public $name;
    public $age;
    public $address;

    // functionalites or methods
    function walk(){
        echo "$this->name is  walking \n";
    }

    function talk(){
        echo "$this->name is  talking in spanish \n\n";
    }

}


$Jenniffer = new Person();
$Jenniffer->name = "Jenniffer";
$Jenniffer->walk();
$Jenniffer->talk();

$andrew = new Person();
$andrew->name = "Andrew";
$andrew->talk();
$andrew->walk();


$anonymous = new Person();
$anonymous->talk();