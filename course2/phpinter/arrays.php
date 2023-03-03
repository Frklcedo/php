<?php

include_once 'functions.php';

$arr1 = array('a', 'b', 'c', 'd', 'e');
$arr2 = array(5, 3, 2, 1, 4);

$arr = array_combine($arr1, $arr2);
br('array_combine');
prearr($arr);

br('array_chunk');
prearr(array_chunk($arr, 2));
prearr(array_chunk($arr, 2, true));

br('array_filter');
$odd = array_filter($arr2, fn($number) => $number % 2 > 0);
$oddKey = array_filter($arr2, fn($number) => $number % 2 > 0, ARRAY_FILTER_USE_KEY);
prearr($odd);
$odd = array_filter($arr2, fn($number) => $number % 2 > 0, ARRAY_FILTER_USE_KEY);
prearr($odd);
$odd = array_filter($arr, fn( $v, $k) => $v % 2 > 0 || $k == 'b', ARRAY_FILTER_USE_BOTH);
prearr($odd);

$odd = [...$odd , false, null, 0, ...$arr1, ...$arr2];
prearr($odd);
prearr(array_filter($odd));

br('array_keys');
prearr(array_keys($odd));
prearr(array_keys($odd, 5));

br('array_map');
$odd = array_map(fn($number) => $number*3,  $arr2);
prearr($odd);
$odd = array_map(fn($a1, $a2) => "$a1-$a2" ,  $arr1, $arr2);
prearr($odd);
$odd = array_map(null ,  $arr1, $arr2);
prearr($odd);

br('array_merge');
$odd = array_merge( $odd, $arr1, $arr2 );
prearr($odd);
prearr(array_merge( $odd, $arr, $arr2, array( 'a' => 'this a letter', 'c' => 'veni veni' ) ));

br('array_reduce');

$products = [
    [
        'name' => 'Computer',
        'price' => '6000.00',
        'discount' => 25
    ],
    [
        'name' => 'Notebook',
        'price' => '3000.00',
        'discount' => 40
    ],
    [
        'name' => 'Cellphone',
        'price' => '2500.00',
        'discount' => 50
    ],
];



br(array_reduce($products, fn($sum,  $i) => $sum + $i['price'] - $i['price'] * $i['discount'] / 100));



br('array_search');

br(array_search( 'b', $odd));
br($odd[ array_search( 'b', $odd) ]);

br('array_diff');
$odd = [
    ...array_filter($odd, fn($v) => !is_array($v)),
    ...$arr
];

prearr($odd);
prearr(array_diff($odd, $arr));
prearr(array_diff_assoc($odd, $arr));
prearr(array_diff_key($odd, $arr));

br('array_sort');
prearr($arr);
asort($arr);
prearr($arr);
ksort($arr);
prearr($arr);

br('list []');

list($a, $b, $c, $d, $e) = $arr2;

prearr([
    $a, $b, $c, $d, $e
]);
