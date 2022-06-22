<?php

function numexists($str){
    for($i = 0,$con=0;$i<10;$i++){
        if(strpos($str,(string)$i)){
            $con++;
        }
    }
    if($con===0) return false;
    else return true;
}

function validateInfo($generalInfo){
    $generalInfo['age'];

    if(!filter_var($generalInfo['email'],FILTER_VALIDATE_EMAIL)):
        return false;
    endif;
    
    if($generalInfo['password'] === $generalInfo['confirm']){
        if(strlen($generalInfo['password']) >= 8){
            if (!numexists($generalInfo['password'])){
                return false;
            }
        }
        else return false;
    }
    else return false;

    $generalInfo['state'];
    return true;
}