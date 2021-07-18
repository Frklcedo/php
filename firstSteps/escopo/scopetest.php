<?php

    $nomen = "Frk";
    
    function br(){

        echo "<br/>";
    }

    function test(){

        global $nomen; //To take the outside variable to the inner scope

        echo $nomen; //Without global, this echo would not work

    }

    function test1(){

        $nomen = "Carolus Magnus";

        echo $nomen;    //This variable $nomen is different from the other from the outside scope    
    }
    
    test();

    br();

    test1(); //Outside $nomen was never brought the inner scope of this funcion
    
?>
