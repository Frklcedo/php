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
function br(string $text = ''){
    echo "$text <br />";
    return '';
}
function prearr($arr){
    br('<pre>');
    print_r($arr);
    br('</pre>');
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

function multiplicate(int|float $x, int|float $y = 1): int|float{
    return $x * $y;
}

function divideByReference( &$x ){
    if($x % 2 == 0){
        $x /= 2;
    }
}

function sum(int ...$n){
    return array_sum($n);
}

// php8 named args
function displayPerson(string $name, int $age, float $money){
    echo "Name: $name <br />";
    echo "Age: $age <br />";
    echo "Total possessions: $money <br />";
    echo "<br />";
}

br();
br();
br("End of functions.php file");
br();
br();
