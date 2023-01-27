<?php

$x = require('first-include.php');

echo '<pre>';
var_dump( $x );
echo '</pre>';

ob_start();
require('second-include.php');
$nav = ob_get_clean();

echo $nav;
