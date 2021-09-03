<?php

require_once("config.php");

$user = new User();

$uInfo = array();

$uInfo['firstname'] = htmlspecialchars($_POST['firstName']);
//$nome = htmlspecialchars($_POST['firstName']);

$uInfo['lastname'] = htmlspecialchars($_POST['lastName']);

if(isset($_POST['ageNew'])):
    $uInfo['age'] = (int)$_POST['ageNew'];
else:
    $uInfo['age'] = NULL;
endif;

$uInfo['email'] = $_POST['emailNew'];
$uInfo['password'] = $_POST['passNew'];
$uInfo['confirm'] = $_POST['passConfirm'];

$uInfo['state'] = $_POST['stateNew'];



if(validateInfo($uInfo)):

    $user->setNome($uInfo['firstname']);
    $user->setSobrenome($uInfo['lastname']);
    $user->setIdade($uInfo['age']);
    $user->setEmail($uInfo['email']);
    $user->setSenha($uInfo['password']);
    $user->setEstado($uInfo['state']);
    unset($uInfo);
    echo $user;
else:
    echo "REGISTRO INCOMPLETO";
    unset($uInfo);
endif;