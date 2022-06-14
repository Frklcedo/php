<?php  

function sum(int ...$allvalues):string{

    $tot = array_sum($allvalues);
    return $tot;

}

echo sum(15,56,100,29.5) . "<br>";

echo sum(31,21,34) . "<br>";

var_dump(sum(24,52,14))

?>