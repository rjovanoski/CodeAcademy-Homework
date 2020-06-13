<?php


class Person 
{
    public $name;
    public $age;

    function set_name($name){
    $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function set_age($age){
      $this->age = $age;
    }

    function get_age(){
      return $this->age;
    }
}

$firstName = new Person();
$personAge = new Person();

$firstName->set_name('Radoslav');
$personAge->set_age('35');

var_dump ("My name is "  . $firstName->get_name().".");
echo "<br>";
var_dump("I'm ". $personAge->get_age(). " years old.");