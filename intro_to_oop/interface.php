<?php

define("QBR","<br>");

interface Veiculo {

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo{

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

$carro = new Civic();

$carro->trocarMarcha(5);

echo    QBR;

$carro->acelerar(150);

echo QBR;

$carro->freiar(100);

echo QBR;

$carro->trocarMarcha(2);