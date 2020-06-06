<?php

class Person {
    public $name;
    public $age;

    function __construct($name, $age){
        $this->name=$name;
        $this->age=$age;
    }

    function getName(){
        return $this->name;
    }

    function getAge(){
        return $this->age;
    }
}



$obj=new Person('John', 32);
$objName = $obj->getName();
$objAge = $obj->getAge();

var_dump($obj);
var_dump($objName);
var_dump($objAge);



