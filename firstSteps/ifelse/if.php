<?php

require "index.html";
echo "<br>"; // Still learning the correct way to do it 

$yourage = (int)$_GET["a"];

$agekid = 12; 
$ofage = 18;
$seniorage = 60; 


if ($yourage < $agekid){

    echo "Child";

}
else if ($yourage < $ofage){

    echo "Teenage";

}
elseif ($yourage < $seniorage){

    echo "Adult";

}
else if ($yourage < 125){

    echo "Senior";

}
else{

    echo "Vampire";

}

echo "<br>";
echo($yourage < $ofage)? "Minor":"Major(Adult)";

?>