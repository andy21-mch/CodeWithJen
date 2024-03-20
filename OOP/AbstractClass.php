<?php 


abstract class AbstractClass {
    public $name;

    abstract public function greet();

}


interface interfaceClass {
    /**
     * This is suppose to be the greet method

     */
    public function greet(): void;

    /**
     * Undocumented function
     *
     * @return void
     */
    public function walk() : void;

}

class ChildOfAbstract extends AbstractClass {
    public function greet(){
        echo "hello";
    }
}

class ChildOfInterfaceClass implements InterfaceClass {
    public function greet(){

    }

    public function walk(){

    }
}