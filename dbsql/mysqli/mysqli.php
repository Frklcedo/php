<?php

$conn = new mysqli ("localhost", "root", "", "dbphp7");

if($conn->connect_error){
    echo "ERROR" . $conn->connect_error;
}
else{

    $stmt = $conn->prepare("INSERT INTO tb_users (deslogin,despassword) VALUES (?,?)");
    /*$localname = "user";
    $localpass= "124578";*/ 
    $stmt->bind_param("ss",$localname,$localpass); //can only be assigned through variables
    $localname = "user";
    $localpass= "124578";
    //since it is a process of praparation and bindingness, the variable data can be defined before or after


    //execution of what's prepared
    $stmt->execute();

    $localname = "Carolus";
    $localpass = "iamMagnus";

    $stmt->execute();
}