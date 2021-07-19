<?php

$json = '[{"name":"Iluvatar","call":"Eru","number":"unus"},{"name":"Melkor","call":"Desolation"},{"name":"Manwe","call":"Winds"},{"name":"Varda","call":"Stars"},{"name":"Ulmo","call":"Seas"}]';

//Function that turns a .json into an array or into an object
$data = json_decode($json, true); //if true, .json will be converted into an array

var_dump($data); 


?>