<?php

require_once("config.php");

session_destroy($_SESSION['nome']);

echo session_id() . "<br>";

var_dump($_SESSION);


?>