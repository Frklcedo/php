<?php

//using in a private browser
session_id('i3eivbbok03v6ofetthjuu4sn5'); //Random local id

require_once("config.php");

echo session_id() . "<br>";

var_dump($_SESSION);

?>