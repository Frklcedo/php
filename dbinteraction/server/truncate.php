<?php

require_once("config.php");

$stmt = $conn->prepare("TRUNCATE TABLE tb_user");

$stmt->execute();