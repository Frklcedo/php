<?php

    $nomen="Frk";

    echo $nomen." nomen meus est<br>";

    $nomen.="lmakedo"; //Add to the variable what it's beeing concatenated

    echo $nomen."<br>";

    echo "<hr>";

    $totalvalue = 100.00;

    echo "R$".$totalvalue."<br>"; 

    $totalvalue += 110; // Add a value on top of what the variable already have 

    echo "R$".$totalvalue."<br>"; 

    $totalvalue -= 10; // Subtracts a value on top of what the variable already have 

    echo "R$".$totalvalue."<br>";

    $totalvalue *= .9; // Multiplies a value on top of what the variable already have

    echo "R$".$totalvalue."<br>";
        
    echo "<hr>";

    $x = 11;
    $y = 2;

    echo "Addition: ";
    echo  $x+$y ."<br>";

    echo "Subtraction: ";
    echo  $x-$y ."<br>";

    echo "Multiplication: ". $x * $y ."<br>";

    echo "Division: ". $x / $y ."<br>";

    echo "Modulus: ". $x % $y ."<br>";

    echo "Exponentiation: ".$x ** $y ." = (11^2)<br>";

    echo "<hr>";

    $a = 1;

    echo $a."<br>";

    echo $a++."<br>";

    echo $a."<br>";

    echo ++$a."<br>";

    echo $a."<br>"; 

?>