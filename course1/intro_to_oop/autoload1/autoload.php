<?php

function includeClass($className){

    if(file_exists($className . ".php")): 
        require_once($className . ".php");
    endif;

}

spl_autoload_register("includeClass"); //Will autoload when instantiating a class the function on parameter

spl_autoload_register(function($nomineClass){  // Hidden function

    if(file_exists("abstracts" . DIRECTORY_SEPARATOR . $nomineClass . ".php")): 
        require_once("abstracts" . DIRECTORY_SEPARATOR . $nomineClass . ".php");
    endif;

});

$car = new DelRey();

echo "<hr/>";

$car->acelerar(200);