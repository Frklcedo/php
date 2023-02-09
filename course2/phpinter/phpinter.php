<?php

declare(strict_types=1);

$x = require('first-include.php');

echo '<pre>';
var_dump( $x );
echo '</pre>';

ob_start();
require('second-include.php');
$nav = ob_get_clean();

echo $nav;

require_once 'functions.php';

foo();

br();

echo bar();

br();

// will always return a integer
var_dump(returnsAInteger());
br();

// will always return nothing - null
var_dump(returnsNothing());
br();

// returns multiple values
var_dump(returnsMultipleTypes(3));
br();
var_dump(returnsMultipleTypes(["Pode"]));
br();
var_dump(returnsMultipleTypes(true));
br();

// forces to integer
var_dump(returnsMultipleTypes(1.5));
br();


// returns mixed values
var_dump(returnsMixed());
br('<br />');

br("Type hinting");

var_dump( multiplicate(5, 6.5) );

br('Passing by reference');
$x = 6;
divideByReference($x);
br( (string) $x );

br("Spread/Splat Operator");
$toSum = [4,6,7,3];
echo sum(...$toSum);

br();
br("PHP8 named args");

$aPerson = [
    'money' => 10000,
    'name' => "Snake Solid",
    'age' => 45,
];
displayPerson(age: 22, money: 3000.5, name: 'Frkl');
displayPerson(...$aPerson);

br(br(' '));

br('Variable Functions');
$funcName = 'sum';
if(is_callable($funcName)){
    br( (string)$funcName(3,5,6,1) );
}
else{
    br('Not callable');
}

br();
$anom = function(){
    return 'Anonimous functions';
};
br($anom());
br();
$closure = 'This is a closure';
$closureFunction = function()use($closure):string{
    $closure .= '<-<-';
    return $closure;
};
br($closureFunction());
br($closure);

$aCallback = function(callable $aFunc, int|float ...$numbers){
    return $aFunc(...array_map(function($number){
        return $number * 2;
    }, $numbers));
};

br(( string ) $aCallback('sum', 1, 2, 3, 4, 5));

$arr = [1, 2, 3, 4, 5];
$x = 0;

$arr2 = array_map(fn($number) => $number*$number + ++$x, $arr);

br();
print_r($arr2);
br();
br((string)$x);
