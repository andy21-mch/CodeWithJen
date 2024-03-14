<?php 

class Cat extends Animal
{

    public function makeSound(){
        echo "$this->name is saying Meow!\n";
    }

}