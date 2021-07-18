<?php

    //Basic variables
        $nomen = "Frk";
        $mymachine = 'localhost';

        $annus = 2000;
        $money = 3.14;
        $vetus = false;

    //Compound variables

        // array / vetor
        $fruits = array("apple", "orange", "lemon");

            echo $fruits[2];
            echo "<br/>";

        // Object / OOP
        $nascetur = new DateTime();

            var_dump($nascetur);
            echo "<br/>";
    
    //Special variables
    
        //resource
        $archive = fopen("var03.php", "r");

            var_dump($archive);
            echo "<br/>"; 

        //null  (NOT THE SAME AS EMPTY)

        $nulo = NULL; //Doesn't take up space
        $vazio = "";  //space associated in memory 

?>