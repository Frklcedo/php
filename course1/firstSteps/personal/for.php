<?php

echo date("Y");
echo "<select>";
    for($i = date("Y"); $i < date("Y")-200; $i--)
    {
        echo '<option value="'.$i.'">'.$i.'<\option>';
    }
echo "<\select>";
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