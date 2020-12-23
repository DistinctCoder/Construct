<?php 

class Student{

    protected $name; // Access modifier
    protected $age;

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    private function setName($name){
        $this->name = $name;
    }

    private function setAge($age){
        $this->age = $age;
    }

    public function __construct($name , $age){
        $this->setName($name);
        $this->setAge($age);
    }

}

$ob = new Student('Porag', 32);

echo $ob->getName();

echo "<br>";

echo $ob->getAge();