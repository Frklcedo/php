<?php 

class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a,$b,$c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

    public function __destruct(){

        echo "<br> OBJECT destroyed <br>";
        
    }

    public function __toString(){

        return $this->logradouro . ", nº " . $this->numero . ", " . strtoupper($this->cidade) . ".";

    }

}

$myaddr = new Endereco("Somestreetsomewhere",1159,"Rome");

var_dump($myaddr);

echo "<br>";

echo "<br>" . $myaddr . "<br>"; 

unset($myaddr);