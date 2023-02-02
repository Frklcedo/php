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
