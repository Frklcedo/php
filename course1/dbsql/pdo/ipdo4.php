<?php 

require_once("logindb.php");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_user WHERE iduser = ?");

$id = 2;

$stmt->execute(array($id));

$conn->rollBack();
// $conn->commit();

echo "Deleted";