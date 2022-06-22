<?php

$conn = new mysqli ("localhost", "root", "", "dbphp7");

if($conn->connect_error){
    echo "ERROR" . $conn->connect_error;
}
else{

    $result = $conn->query("SELECT * FROM tb_users ORDER BY deslogin");

    while($row = $result->fetch_array()){
        var_dump($row);
    }

}
