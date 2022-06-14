<?php

function iter(iterable $vektor){

    $mlettera = "";

    foreach($vektor as $value){

        echo $value . "<br>";

        if(strlen($mlettera) < strlen($value)){

            $mlettera = $value;

        }

    }

    echo "<br>";

    return $mlettera;

}

$strarr = array(

    "Magnus",
    "Carolus",
    "Thomas Aquinas",
    "Aristoteles",
    "Socrates",
    "Plato"

);

echo iter($strarr);

?>