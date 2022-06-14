<?php 

// index.php will be called instantly

require_once("config.php"); // Requiring the file with the configurations of the total file 

use Client\Register;  // function that will call the config.php for the namespaceDir\namespaceFile
// the backslash '\' is necessary

$reg = new Register();  // Instantiating a new reg object

//Setters
$reg->setName("Carolus Magnus");
$reg->setEmail("magnusrex@kmail.com");
$reg->setPassword("rexoptimus768");

echo "<br>";

echo $reg; // Magic method

echo "<hr>";

$reg->sale(); //Calling namespace function

?>