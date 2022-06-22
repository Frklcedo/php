<?php

require_once("config.php");

$Acc = new Account();
$Acc->setName($_POST['name']);
$id = $_POST['id'];
$oldPass = $_POST['oldpass'];
$Acc->setPassword($_POST['passwd']);
$Acc->setCheckPass($_POST['passwdcon']);
$table = $conn->prepare("SELECT * FROM tb_user");
$table->execute();
$tb = $table->fetchAll(PDO::FETCH_ASSOC);
foreach($tb as $rows){
    if($rows['iduser']==$id){
        $oldData = $rows;
    }
}
unset($id,$rows);
if($oldPass==$oldData['despass']){
    if($Acc->getPassword()===$Acc->getCheckPass()){
        $stmt = $conn->prepare("UPDATE tb_user SET deslogin = :LOGIN, despass = :PASSWORD WHERE iduser = :ID");
        $name = $Acc->getName();
        $passw = $Acc->getPassword();

        $stmt->bindParam(":LOGIN",$name);
        $stmt->bindParam(":PASSWORD",$passw);
        $stmt->bindParam(":ID",$oldData['iduser']);

        $stmt->execute();
        echo "<p>Account updated</p>";
        unset($Acc);
        unset($name);
        unset($passw);
        unset($oldData);
    }
    else{
        echo "<p>New password mismatch</p>";
    }
}
else{
    echo "<p>Old password doesn't match</p>";
}


