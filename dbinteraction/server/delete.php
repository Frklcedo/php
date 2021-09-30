<?php

require_once("config.php");

$stmt = $conn->prepare("DELETE FROM tb_user WHERE iduser = :ID");

$id = $_POST['id'];

$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Account sucessfully deleted";