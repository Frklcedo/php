<?php

    // força tipos estritos nas variáveis e funções
    // declare( strict_types=1 );

    // variables
    $name = "frkl";

    $name = "Frklcedo";

    echo $name;

    // constants
    const BR = '</br>';

    define('NOME', 'frkl.cedus');

    echo BR . NOME;

    $definido = defined('NOME');

    echo BR . $definido;

    $paid = "PAID";
    define('STATUS_' . $paid, $paid);
    echo BR . STATUS_PAID;

    // basic constants and magic constants
    echo BR . PHP_VERSION;
    echo BR . __LINE__;
    echo BR . __FILE__;

    // variable variables
    $pain = "dor";
    $$pain = "sofrimento";


    echo BR . "$pain $dor";
    echo BR . $pain . ' ' . $$pain;
    echo BR . "$pain ${$pain}";

    // data types and type casting

    echo BR . gettype( $definido ) . BR;
    var_dump( $definido );

    $arr = ['link', 'zelda', 'blanka'];
    print_r ( $arr );

    $num = ( int ) '5';
    print ( BR );
    var_dump( $num );

    // BOOLEANS
    $isBool = (bool) true;
    echo BR . is_bool($isBool);
    if($isBool){
        echo BR;
        var_dump($isBool);
    }
    echo BR;

    // int
    $x = 42;
    echo "basic int = $x" . BR;

    $x = 0x2a;
    echo "hexadecimal int = $x" . BR;

    $x = 052;
    echo "octonumber int = $x" . BR;

    $x = 0b101010;
    echo "binary int = $x" . BR;

    $x = (int)'12cjas';
    echo "string to int ('12cjas')= $x" . BR;
    $x = (int)'teste';
    echo "string to int ('teste')= $x" . BR;

    // float

    $x = 3.5;
    var_dump($x);
    echo BR;

    $x = 3.5e3;
    echo $x . BR;
    $x = 3.5e-3;
    echo $x . BR;

    // errors on floats -some-functions
    $x = 0.1 + 0.7;
    echo $x . BR;
    $x *= 10;
    echo $x . BR;
    $x = floor($x) ;
    echo $x . BR;
    $x = ceil((0.1 + 0.2) * 10) ;
    echo $x . BR;


    // NaN and INF
    $x = PHP_FLOAT_MAX * 2;
    var_dump(is_infinite($x));
    var_dump(is_finite($x));
    var_dump($x);
    echo BR;
    $x = log(-1);
    var_dump(is_nan($x));
    var_dump($x);
