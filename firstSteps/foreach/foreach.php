<?php 

$dweek = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
$mmYear = array("January","February","March","April","May","June","July","August","September","October","November","December"); 

foreach($dweek as $day){

    echo $day."<br>";

}

echo "<br><strong>__|Month</strong><br>";

foreach($mmYear as $index => $month){
    if ($index+1<10) echo "0";
    echo $index+1 . " ";

    echo $month . "<br>";
}

?>