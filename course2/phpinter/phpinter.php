<?php

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
br();
