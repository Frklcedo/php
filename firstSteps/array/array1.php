<?php

$bidmArr[0][0]="C/C++";
$bidmArr[0][1]="PHP";
$bidmArr[0][2]="HTML";
$bidmArr[0][3]="CSS";
$bidmArr[1][0]="JavaScript";
$bidmArr[1][1]="Linux";
$bidmArr[1][2]="MySQL";
$bidmArr[1][3]="WordPress";
$bidmArr[2][0]="Golang";
$bidmArr[2][1]="Laravel";
$bidmArr[2][2]="React";
$bidmArr[2][3]="DNS";


print_r($bidmArr);

echo "<p>";

    foreach($bidmArr as $value){

        foreach($value as $key1 => $value1){
            
            echo $key1 . "=>" . $value1 . "<br>";

        }

        echo "<br>";
    }

echo "</p>";

?>