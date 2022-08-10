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

    // string

    $firstName = "Frkl";
    $lastName = 'cedo';
    $fullName = "$firstName{$lastName}";
    echo "<br /> $fullName";
    $fullName = "$firstName[0] ${lastName}";
    echo "<br /> $fullName";
    echo "<br /> $fullName[2]";
    echo "<br /> $fullName[0]";
    echo "<br /> $fullName[-1]"; // inverted access
    // $fullName[0] = 'f';
    // echo "<br /> $fullName";

    $fullName = "$firstName{$lastName}";
    echo BR;
    var_dump($fullName);
    $fullName[8]= "!";
    echo BR;
    var_dump($fullName);
    $fullName[11]= "!";
    echo BR;
    var_dump($fullName);

    // Heredoc == same as double quotes
    // Has and identifier the opens and closes the block
    $text = <<<TEXT

                   line 1, $firstName[0]
                   line 2, $firstName[1]
                   line 3, $firstName[2]
                   line 4, $firstName[3]

    TEXT;

    echo nl2br($text); // function that converts breakline char \n to <br />

    // Nowdoc == same as single quotes
    // just put the identifier in single quotes
    $text = <<<'TEXT'

                   line 1, $firstName[0]
                   line 2, $firstName[1]
                   line 3, $firstName[2]
                   line 4, $firstName[3]

    TEXT;

    echo nl2br($text);

    $html = <<<HTML
        <div style="text-align:center; background-color: #dddddd">
            <h1>Hello $fullName</h1>
        </div>

    HTML;

    echo $html;

    // null NuLl NULL
    $x = null;
    echo $x;
    var_dump($x);
    echo BR . "is null? ";
    var_dump( is_null( $x ) );

    $x = 123;

    unset($x); // becomes null

    // array
    // $programmingLanguages = array('php', 'javascript', 'python'); // same thing
    $programmingLanguages = ['php', 'c++', 'python'];
    echo BR;
    echo $programmingLanguages[0];
    if(isset($programmingLanguages[3])){
        echo $programmingLanguages[0];
    }
    $programmingLanguages[1] = 'javascript';

    echo BR;
    echo '<pre>';
    print_r($programmingLanguages);
    echo '</pre>';
    echo count($programmingLanguages);

    $programmingLanguages[] = 'C++';
    echo '<pre>';
    print_r($programmingLanguages);
    echo '</pre>';
    echo count($programmingLanguages);

    array_push($programmingLanguages, 'C', 'Rust');
    echo '<pre>';
    print_r($programmingLanguages);
    echo '</pre>';
    echo count($programmingLanguages);

    $programmingLanguages = [
      'frontend' => 'javascript',
      'backend' => ['php', 'python'],
      'database' => 'mariadb'
    ];
    echo '<pre>';
    print_r($programmingLanguages);
    echo '</pre>';
    echo count($programmingLanguages);
    echo '<pre>';
    print_r($programmingLanguages['backend']);
    echo '</pre>';
    $newTool = 'cms';
    $programmingLanguages[$newTool] = 'wordpress';
    echo '<pre>';
    print_r($programmingLanguages);
    echo '</pre>';
    echo $programmingLanguages['backend'][0];

    $arr = ['f', 'r', 'k', 'l', 50 => 'c', 'e', 'd', 'o'];
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    echo array_shift($arr);
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    $arr = ['f', 'r', 'k', 'l', 50 => 'c', 'e', 'd', 'o'];
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    unset($arr[50]);
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    $arr = ['f', 'r', 'k', 'l', 'sn' => 'c', 50 => 'e', 'd', 'o'];
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    unset($arr[50], $arr['sn']);
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    $arr[] = 'a';
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    var_dump(array_key_exists(51, $arr));
    var_dump(array_key_exists('fn', $arr));
    if(array_key_exists(51, $arr)){
        echo $arr[51];
    }
