<?php

$cond = TRUE;

while($cond){
    
    $rnum = rand(0,100);
    
    if($rnum >=50 && $rnum <=55)
    {
        echo "Server Shutdown";
        $cond = FALSE;
    }
    else{
        echo $rnum . " ";
    }
    
}

?>