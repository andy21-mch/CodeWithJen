<?php 


class Animal
{
    public $name;

    public function __construct($animalName){
        $this->name = $animalName;
    }

    public function makeSound(){
        echo "$this->name Default sound";
    }


}
