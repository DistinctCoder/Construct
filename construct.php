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

    private function serName(){
        $this->name = $name;
    }

    private function serAge(){
        $this->name = $age;
    }

    public function __construct($name, $age){
        $this->setName($name);
        $this->setAge($age);
    }

}

$ob = new student('Porag', 32);

echo $ob->getName();
echo $ob->getAge();