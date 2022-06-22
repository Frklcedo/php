<?php

$arr = [13,14,15,29];

print_r($arr);

$arr[0] = 17;

print_r($arr);

echo "<br><br>";

$alunos=array(
    array(
        'nome'=>'Gabriel',
        1=>3.0,
        0.0,
        2.0,
        4.0,
    ),
    array(
        'nome'=>'Beatriz Paixão',
        1=>10.0,
        10.0,
        10.0,
        10.0,
    ),
    array(
        'nome'=>'Franklin',
        1=>6.0,
        7.0,
        7.5,
        8.5,
    )
);

print_r($alunos);

$notaCorte=7;

echo "<br><br>";

foreach($alunos as &$aluno){

    $media= array_sum($aluno)/4;
    if ($media<$notaCorte):
        echo array_sum($aluno)/4 . "<br>";
        $aluno['status']='Reprovado';
    else: $aluno['status']='Aprovado';
        echo array_sum($aluno)/4 . "<br>";
    endif;

}

print_r($alunos);