<?php

class car{

    private $model;

    private $motor;

    private $annus;

    public function getModel(){

        return $this->model;

    }

    public function setModel($modreceived){
        
    $this->model = $modreceived;

    }

    public function getMotor():float{

        return $this->motor;

    }

    public function setMotor($motreceived){
        
    $this->motor = $motreceived;

    }

    public function getAnnus():int{

        return $this->annus;

    }

    public function setAnnus($anoreceived){
        
    $this->annus = $anoreceived;

    }

    public function infocar(){

        return array(

            'model'=>$this->getModel(),
            'motor'=>$this->getMotor(),
            'year'=>$this->getAnnus()

        );

    }

}

$gol = new car();
$gol->setModel("Gol GT");
$gol->setMotor("1.6");
$gol->setAnnus("2017");

var_dump($gol->infocar());