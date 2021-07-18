<?php

for($i = 0; $i <200;$i++)
{
    if ($i>=100) break;
    
    if($i%10===0) 
    {
        echo "<br>";
        continue;
    }
    else if ($i<10) echo (int)"0".$i." ";
    else echo $i." ";
}

?>