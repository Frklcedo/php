<?php 

echo date("d/m/Y H:i:s" );

echo "<br>";

echo time(); //Unix timestamp, data e hora com base em segundos

echo "<br>";

echo date("d/m/Y H:i:s", 1627605616);

echo "<br>";

$ts = strtotime("1989-11-10");

echo $ts;

echo "<br>";

echo date("l, d/m/Y",$ts);

echo "<br>";

$ts = strtotime("now");

echo "<br>";

echo date("l, d/m/Y",$ts);

echo "<br>";

$ts = strtotime("+1 day +1 week +10 year");

echo "<br>";

echo date("l, d/m/Y",$ts);

echo "<br>";

?>