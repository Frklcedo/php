<?php

    $annusnascere = 2000;

    $nomen = "Franklin";

    echo $nomen;
    
    //Break row
    echo "<br/>";

    //unset() to clean up a variable
    unset($nomen);

    $nomen = "Carolus";

    $duonomen = "Magnus";

    // Use of dot (.) to concatenate
    $nomenplenus = $nomen . " " . $duonomen;

    //isset() to check if exists 
    if(isset($nomen))
    {

        echo $nomen;

    }

    //Stops the program
    exit;



?>