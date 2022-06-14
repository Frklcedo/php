<?php

$weekday = date("w"); //Function that will return the day of the week from 0 to 6

echo "$weekday<br>";
switch($weekday)
{
    case 0: echo "Sunday";
    break;
    case 1: echo "Monday";
    break;
    case 2: echo "Tuesday";
    break;
    case 3: echo "Wednesday";
    break;
    case 4: echo "Thursday";
    break;
    case 5: echo "Friday";
    break;
    case 6: echo "Saturday";
    break;
    default: echo "Unavailable answer";
    break;
}
?>