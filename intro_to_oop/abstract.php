<?php

define("QBR","<br>");

interface Veiculo {

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo{

    public function acelerar($velocidade){

        echo "O veículo acelerou até " . $velocidade;

    }

    public function freiar($v){

        echo "O veículo desacelerou até " . $v;

    }

    public function trocarMarcha($marc){

        echo "O veículo engatou a marcha " . $marc;

    }

}

class DelRey extends Automovel{

    public function Empurrar(){



    }

}

$carro = new DelRey();
$carro->acelerar(200);
