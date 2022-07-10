<?php

// expressions

$x = 5;
$y = $x;

$z = $x === $y;
// $z = sum($x, $y);

if ($x < 6){
    echo 'Hello expressions' . '<br />';
}

// operator = takes one or multiple expressions and
// assign them in a value

// arithmetics ( +, -, *, /, %, ** )
$x = 10;
$y = 2;

echo '<h1>arithmetic operators</h1>';
echo 'sum ' . $x + $y . '<br />';
echo 'sub ' . $x - $y . '<br />';
echo 'multi ' . $x * $y . '<br />';
echo 'division ' . $x / $y . '<br />';
echo 'module ' . $x % $y . '<br />';
echo 'poten ' . $x ** $y . '<br />';

// dividing by 0

// cannot $x / 0;
echo 'division by zero ' . fdiv($x, 0) . '<br />';
// if divided by 0 returns INF
var_dump( fdiv($x, 0) );
echo '<br />';

// all module ops cast values to ops
var_dump( 10.5 % 3.9);
echo '<br />';
// to use module on floats
var_dump( fmod(10.5, 3.9) );
echo '<br />';

$z = $x;
$z += $y;
echo 'sum by the number ' . $z . '<br />';
$z *= $y;
echo 'multi by the number ' . $z . '<br />';
$z /= $y;
echo 'division by the number ' . $z . '<br />';
echo 'etc <br />';

// string operators;
echo $x . " something <br />";
$z .= " concat on variable <br />";
echo $z;

// comparison (== === != !== <> < > <= >= <=>)
echo '<h1>comparison operators</h1>';

$z = 10.0;
// equality
var_dump($x == $z); // loose comparison
echo '<br />';
var_dump($x === $z); // strict comparison
echo '<br />';
// inequality
var_dump($x != $z); // loose comparison
echo '<br />';
var_dump($x <> $z); // loose comparison
echo '<br />';
var_dump($x !== $z); // strict comparison
echo '<br />';

//spaceship

echo "x = $x y = $y z = $z <br />";
echo ( $x <=> $y ) . '<br />';
echo ( $x <=> $z ) . '<br />';
echo ( $y <=> $x ) . '<br />';

// conditional operators (?? ?:)

echo ($x == $z)? 'equal' : 'not equal';
echo '<br />';

echo ($x == $y)? 'equal' : 'not equal';
echo '<br />';

$z = $x ?? 'x is null';
echo $z;
echo '<br />';
$somenull = null;
$z = $somenull ?? 'somenull is null';
echo $z;
echo '<br />';
