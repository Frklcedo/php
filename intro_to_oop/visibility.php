<?php

class Person{

    public $name = "Rasmus Lerdorf";
    protected $age = 48;
    private $passw = "123456";

    public function getData(){

        echo get_class($this) . "<br>";

        echo $this->name . "<br>";
        echo $this->age . "<br>";
        echo $this->passw . "<br>";

    }

}

class Programmer extends Person{

    public function getProgData(){

        echo $this->name . "<br>";
        echo $this->age . "<br>";
        //echo $this->passw . "<br>"; //Will not work

    }

    /*

    public function getData(){

        echo get_class($this) . "<br>";

        echo $this->name . "<br>";
        echo $this->age . "<br>";
        echo $this->passw . "<br>";

    }   */

}

$legend = new Person();

echo $legend->name . "<hr>"; //Granted access because name is a public attribute

//echo $legend->age . "<br>"; //Access denied because age is a protected attribute
//Can only be accessed inside the class or through heritage

//echo $legend->passw . "<br>"; //Access denied because passw is a private attribute
//Can only be accessed inside the class

$legend->getData();

echo "<hr>";

$nextlevel = new Programmer();

$nextlevel->getProgData();

$nextlevel->getData();


