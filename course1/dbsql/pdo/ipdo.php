<?php

require_once ("logindb.php");

$stmt = $conn->prepare("SELECT * FROM tb_users ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $rows){
    foreach($rows as $keys=>$values){
        echo "<strong>" . $keys . "</strong> >> " . $values . "<br>";
    }
    echo "<br>";
}

//var_dump($results);
