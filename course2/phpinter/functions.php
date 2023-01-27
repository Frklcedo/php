<?php

// // Does not work
// var_dump(inCondition());

if(true){
    function inCondition(){
        return "In conditions it must be called after declaration";
    }
}

// Does work
var_dump(inCondition());

br();

// // Does not work
// nestedFunction();
aFunction();
// Does work
nestedFunction();

function foo(){
    echo 'foo';
}
function br(){
    echo '<br />';
}
function bar(){
    return 'bar';
}

function aFunction(){
    function nestedFunction(){
        echo "A nested function";
        br();
    }
    echo "A function";
    br();
}

function returnsAInteger():?int{

    // Returns a integer by conversion
    return '1';
    // Can return null
    return null;

    //Gives an error
    return [];

}

function returnsNothing():void{
    // must return nothing
    return;

    // does not work
    // return null;
}

function returnsMultipleTypes( $whatEnters ):array|int|bool{

    return $whatEnters;

    // works
    return [];
    return 1;
    return true;
}

function returnsMixed():mixed{

    // works
    return [];
    return 1;
    return true;

}
