<?php

class Animal {


    public function sound(){

        return "speak";

    }

    public function movement(){

        return "walk";

    }
}

class Dog extends Animal{

    public function sound(){

        return "bark";

    }

}

class Cat extends Animal{

    public function sound(){

        return "Meow";

    }

}

class Bird extends Animal{

    public function movement(){
        
        return "Fly and " . parent::movement();

    }
}

$pluto = new Dog();

echo $pluto->sound() . "<br/>";
echo $pluto->movement() . "<br/>";

echo "<hr/>";

$garfield = new Cat();

echo $garfield->sound() . "<br/>";
echo $garfield->movement() . "<br/>";

echo "<hr/>";

$woodpecker = new Bird();

echo $woodpecker->sound() . "<br/>";
echo $woodpecker->movement() . "<br/>";
