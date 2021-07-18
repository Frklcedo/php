<?php
    //Following structure will result in an error
    /*
    require "inc/funtion.php";
    require "inc/funtion.php";  
    */


    require_once "inc/funtion.php";
    require_once "inc/funtion.php";     //or include_once "inc/funtion.php";

    $result = sum(10,200);
    
    echo $result;

?>