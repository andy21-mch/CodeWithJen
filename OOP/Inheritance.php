<?php
include "Animal.php";
include "Dog.php";
include "Cat.php";


$cat = new Cat("Jerry");

$dog = new Dog("Lucky");

$cat->makeSound();
$dog->makeSound();
