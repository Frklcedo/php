<?php 

function highest(){

    $nums = func_get_args();

    if(isset($nums)){

        $highest=$nums[0];

    }

    foreach($nums as $v){

        if($highest<$v){

            $highest = $v;

        }
    }

    return $highest;

}

echo highest(45,36,15,98,12,36,10005,123,156,15556,22000);


?>