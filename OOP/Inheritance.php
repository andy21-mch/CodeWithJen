<?php
include "Animal.php";
include "Dog.php";
include "Cat.php";


$cat = new Cat("Jerry");

$cat1 = new Cat("Cat1");

$dog = new Dog("Lucky");

$dog1 = new Dog("Dog1");

// $objects = array([compact('cat', 'cat1', 'dog1', 'dog')]);
$objects = [$cat, $cat1, $dog, $dog1];

foreach($objects as $object){
    echo $object->name;
    $object->makeSound();
}

/*
=>
->
[]