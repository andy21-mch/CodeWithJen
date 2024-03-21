<?php 

class Animal {
    private $name;

    private $type;

    private $age;

    // define the getters
    public function getName(){
        return $this->name;
    }

    public function getType(){
        return $this->type;
    }

    public function getAge(){
        return $this->age;
    }

    // define the setters

    public function setName($name){
        $this->name = $name;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function save($fileName){
        $data = [
            'name' => $this->name,
            'type' => $this->type,
            'age'=> $this->age,
        ];

        $jsonData = json_encode($data).PHP_EOL;

        file_put_contents($fileName, $jsonData, FILE_APPEND);
    }

}