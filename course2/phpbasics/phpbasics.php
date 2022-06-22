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
