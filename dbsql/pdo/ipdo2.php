<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost;ConnectionPooling=0", "SA", ''); // server=localhost\SQLEXPRESS only works if it is Windows

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $rows){
    foreach($rows as $keys=>$values){
        echo "<strong>" . $keys . "</strong> >> " . $values . "<br>";
    }
    echo "<br>";
}

//var_dump($results);
