<?php

    $x = 20;
    $y = 20;
    $z = 10;

    echo "<strong>Spaceship comparison <br></strong>";

    var_dump($x <=> $y); // if the values are equal [ = ],  the final value is 0
    echo "</br>";

    var_dump($y <=> $z);  // if the first value is greater than the second [ > ], the final value is 1
    echo "</br>";

    var_dump($z <=> $x);   // if the first value is less than the second [ < ], the final value is 1
    echo "</br>";
?>