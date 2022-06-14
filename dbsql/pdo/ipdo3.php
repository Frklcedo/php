<?php 

require_once("logindb.php");

$stmt = $conn->prepare("INSERT INTO tb_user (deslogin,despass) VALUES(:LOGIN,:PASSWORD)");

$log = "Carlos Magno";
$pw = "rexvirorum";

$stmt->bindParam(":LOGIN", $log);

$stmt->execute();

echo "Insertion made";