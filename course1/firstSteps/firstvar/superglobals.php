<?php
    //Predefined Variables
    $doc = $_GET["a"];
    // /superglobals.php?a=123

    var_dump($doc);
    echo "<br/>";

    $doc1 = (int) $_GET["b"];
    // (int) to force the variable $doc1 into a integer
    // /superglobals.php?a=123&b=456

    var_dump($doc1);
    echo "<br/>";

    //Take the ip from the user
    $ip = $_SERVER["REMOTE_ADDR"];

    echo $ip;
    echo "<br/>";
    
    //Take the location from the user
    $local = $_SERVER["SCRIPT_NAME"];
    
    echo $local;
    echo "<br/>";

?>
