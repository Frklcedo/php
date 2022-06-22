<?php

function __autoload($className){

    echo "Puxou automaticamente do arquivo <strong>\"$className.php\"</strong> a classe -> <strong>";
    var_dump($className);

    echo "</strong><br>";

    require_once("$className.php");

}

$car = new DelRey();

echo "<hr/>";

$car->acelerar(200);