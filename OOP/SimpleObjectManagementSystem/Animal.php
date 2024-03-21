<?php

class Animal
{
    private $name;

    private $type;

    private $age;

    // define the getters
    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getAge()
    {
        return $this->age;
    }

    // define the setters

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function save($fileName)
    {
        $data = [
            'name' => $this->name,
            'type' => $this->type,
            'age' => $this->age,
        ];

        $jsonData = json_encode($data);
        if (file_exists($fileName)) {
            $existingData = file_get_contents($fileName);

            // Decode the existing data to an array
            $dataArray = json_decode($existingData, true);

            $dataArray[] = $data;

            $jsonData = json_encode($dataArray);
        } else {

            $jsonData = json_encode([$data]);
        }

        file_put_contents($fileName, $jsonData . PHP_EOL);
    }

    public function getAllObjects($fileName)
    {
        $objects = [];

        if(file_exists($fileName)){
            $json = file_get_contents($fileName);
            $data = json_decode($json);

            if(is_array($data)){
                foreach($data as $item){
                    $animal = new Animal();
                    $animal->setName($item['name']);
                    $animal->setType($item['type']);
                    $animal->setAge($item['age']);
                    $objects[] = $animal;

                }
            }

            return $objects;

        }
        return [];

    }
}