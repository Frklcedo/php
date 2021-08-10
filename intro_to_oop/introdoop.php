<?php

class Person{

    public $name; // Attribute

    /* Method */
    public function teller(){

        return "My name is " . $this->name; // $this >> variable that represents the attribute $name (name) applied to the instance

    }

}

$magnus = new Person();  // Instanciating a class into object magnus 

$magnus->name = "Carolus Magnus"; //Passing by reference to an attribute inside object magnus 

echo $magnus->teller(); //Running a method by reference using what's stored inside the object magnus 