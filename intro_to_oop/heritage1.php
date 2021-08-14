<?php

class Documento {

    private $numero;

    public function getNumero(){

        return $this->numero;

    }

    public function setNumero($a){

        $this->numero = $a;

    }

}

class CPF extends Documento{

    public function validar(){

        $cpfnumero=$this->getNumero();

        return true;

    }

}

$doc = new CPF();

$doc->setNumero("126.541.156-74");

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();