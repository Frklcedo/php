<?php

require_once("config.php");

$stmt = $conn->prepare("SELECT * FROM tb_user ORDER BY deslogin");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $rows){ 
    foreach($rows as $k => $v){
        $statement = "<p>";
        $statement .= $k;
        $statement .= ": ";
        $statement .= $v;
        $statement .= "</p>";
        echo $statement;
    }
    echo "<hr>";
}
unset($result);
unset($k);
unset($v);
unset($statement);
/*
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);
*/