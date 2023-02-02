<?php
include('functions.php');

// global scope
$x = 2;
include('filescope.php');
br();
br( $x );

function localScope($x){
    // $x = 15;
    echo $x;
}
function globalFromLocal(){
    global $x;
    echo $x;
}
function globalFromSuperGlobal(){
    $GLOBALS['x'] = 15;
    echo $GLOBALS['x'];
}
function getFunctionValue(){
    static $value = null;

    if($value === null){
        $value = useOfStaticVariable();
    }

    return $value;
}
function useOfStaticVariable(){
    sleep(2);

    return 30;
}
localScope($x);
br();
globalFromLocal();
br();
globalFromSuperGlobal();
br();
br($x);

br();
br(getFunctionValue());
br(getFunctionValue());
br(getFunctionValue());
