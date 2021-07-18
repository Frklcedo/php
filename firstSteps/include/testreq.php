<?php

    require "inc/funtion.php";      //If there's an fatal error on the refered file, the current php program will stop 
//          or
//  include "inc/function.php";     //Will not stop current php program even if there's a fatal error on the refered file 

    $result = sum(100,200);
    
    echo $result;

?>