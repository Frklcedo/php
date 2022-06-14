<?php  

$num = 50;

define("ENTER","<br>");

function valuesum($a){

    $a+=10;

    return $a; 

}

function refsum(&$a){

    $a+=50;

    return $a;
}

echo $num . ENTER;

echo valuesum($num) . ENTER;

echo $num . ENTER;

echo refsum($num) . ENTER;

echo $num . ENTER;

?>