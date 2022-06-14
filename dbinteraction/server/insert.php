<?php

require_once("config.php");

$Acc = new Account();
$Acc->setName($_POST['name']);
$Acc->setPassword($_POST['passwd']);
$Acc->setCheckPass($_POST['passwdcon']);
if($Acc->getPassword()===$Acc->getCheckPass()){
    $stmt = $conn->prepare("INSERT INTO tb_user (deslogin,despass) VALUES(:LOGIN,:PASSWORD)");

    $name = $Acc->getName();
    $passw = $Acc->getPassword();

    $stmt->bindParam(":LOGIN",$name);
    $stmt->bindParam(":PASSWORD",$passw);

    $stmt->execute();
    
    echo "<p>";
    echo "Account successfully registered";
    echo "</p>";
    unset($Acc);
    unset($name);
    unset($passw);
}
else{
    echo "<p>";
    echo "Registration failed";
    echo "</br> try it again";
    echo "</p>";
}