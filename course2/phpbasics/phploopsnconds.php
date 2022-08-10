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

    sleep(3);

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
