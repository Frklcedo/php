<?php

define("LOCALDATA",[
    'name'=>'Frkk',
    'ip'=>(string)('192.168.' . rand(0,255) . '.' . rand(0,255)),
    'age'=>'20',
    'database'=>'MySQL'
]);

print_r(LOCALDATA);

?>
