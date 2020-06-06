<?php

class Person{
    public $name;
    public $job;
    public $age;

    function __construct($name, $job, $age){
        $this->name=$name;
        $this->job=$job;
        $this->age=$age;
    }

    function changeJob($newJob){
        $this->job=$newJob;
    }

    function happyBirthday(){
        ++$this->age;
    }

}

$person1 = new Person("Tom", "Button-Pusher", 34);
$person2 = new Person("John", "Lever-Puller", 41);

echo "<h1>Created objects</h1>";
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";


$person1->changeJob("Box-Mover");
$person2->happyBirthday();

echo "<h1>Edited objects</h1>";
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";


