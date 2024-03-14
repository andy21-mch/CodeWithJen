<?php 


class Animal
{
    protected $name;

    public function __construct($animalName){
        $this->name = $animalName;
    }

    public function makeSound(){
        echo "$this->name Default sound";
    }

    // public function setName($name){
    //     $this->name = $name;
    // }

}
