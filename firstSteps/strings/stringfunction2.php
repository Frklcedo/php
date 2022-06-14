<?php

    $p = "Everybody wants to be spiritual but nobody wants to suffer";

    $word = "but";

    $l = strlen($word); // function that return the total number of characters in a string or states the final character [  strlen(string)  ]  

    $q = strpos($p, $word); // function that return the position of a string1 in a string0 [  strpos(string0, string1)  ]  

    $r = substr($p, 0 , $q); // function that return the original string from one position to other [  substr(original, one, other)  ]  

    $s = substr($p, $q + $l, strlen($p)); 
    
    echo "$p <br>";  // variable interpolation
    
    var_dump($q);

    echo "<br>";

    echo $r;

    echo "<br>";

    echo $s;

?>