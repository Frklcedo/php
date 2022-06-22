<?php

    $a = 30;
    $b = 50;
    $c = 50.0;

    var_dump($a > $b); 

    echo "</br>";

    var_dump($a < $b);

    echo "</br>";

    var_dump($a == $b); // == Equality of values 

    echo "</br>";
    
    var_dump($b === $c); // === Equality of types 
    echo "</br>";
    var_dump($b === $c);

    echo "</br>";

    var_dump($c != $b); // == Inequality of values
    echo "</br>";
    var_dump($c !== $b); // === Inequality of types 

    echo "</br>";

?>