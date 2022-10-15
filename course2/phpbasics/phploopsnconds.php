<?php

// switch and loop interactions

$arr = [3, 5, 4, 3, 2];

foreach($arr as $num){

    switch($num % 2){
        case 0:
            echo $num . ' even <br />';
            break 2; // break the switch and the foreach
        case 1:
            echo $num . ' not even <br />';
            break;
    }

}

echo '<br />';

foreach($arr as $num){

    switch($num % 2){
        case 0:
            echo $num . ' even <br />';
            continue 2; // break the switch and the foreach
        case 1:
            echo $num . ' not even <br />';
            continue; // works the same way as a break but with a warning
    }

}

function x(){

    // sleep(3);

    echo "Done <br />";

    return 3;
}

echo "<br />";

//// evaluates the expression 3 times
if(x() == 1){
    echo "1 <br />";
}
elseif(x() == 2){
    echo "2 <br />";
}
elseif(x() == 3){
    echo "3 <br />";
}

echo "<br />";

switch(x()){
    case 1:
        echo '1';
        break;
    case 2:
        echo '2';
        break;
    case 3:
        echo '3';
        break;
    default:
        echo 'none';
}

echo "<br />";

// match expression

$payStts = 3;

// works
// match($payStts ){
//     1 => print 'Paid',
//     2=> print 'Payment declined',

//     0 => print 'Pending Payment'
// };

// switch does loose comparison ==
// match does strict comparison ===
$payDisplay = match($payStts ){
    1 => 'Paid',
    2,3 => 'Payment declined',

    0 => 'Pending Payment',

    default => 'Unknown Payment Status'
};

echo $payDisplay;

// declare & ticks

function onTick(){
    echo "<br />Tick";
}

register_tick_function('onTick');

declare(ticks=1);

$i = 0;
$l = 10;

while($i < $l){
    echo '<br />' . $i++;
}

// declare(strict_types=1); // makes all php variables strict
