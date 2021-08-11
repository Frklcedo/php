<?php

class Document{

    private $number;

    public function getNumber(){

        return $this->number;

    }

    public function setNumber($n){
        $nval = Document:: validatecpf($n);

        if($nval===false){

            throw new Exception("CPF not valid",1);

        }
        else{

            $this->number = $n;

        }
    }

    public static function validatecpf($cpf){

        if(empty($cpf)) return false;

        $cpf = preg_replace('/[^0-9]/','',$cpf);
        $cpf = str_pad($cpf,11,0,STR_PAD_LEFT);
        $cpf = substr_replace($cpf,'',11,strlen($cpf));

        $wrongcpf = 11111111111;
        switch((int)$cpf){
            case $wrongcpf*1:
            case $wrongcpf*2:
            case $wrongcpf*3:
            case $wrongcpf*4:
            case $wrongcpf*5:
            case $wrongcpf*6:
            case $wrongcpf*7:
            case $wrongcpf*8:
            case $wrongcpf*9: return false;
        }
        unset($wrongcpf);
        
        for($uncpf=0,$i = 0; $i<11; $i++){

            $uncpf+=(int)substr($cpf,$i,1);
    
        }
         
        $deccpf=0;

        while($uncpf>=10){

            $uncpf-=10;
            $deccpf+=1;
    
        }
    
        if($uncpf === $deccpf) return true;
        else return false;

    }

}

$cpf = new Document();

$cpf->setNumber("111.222.333-05");

var_dump($cpf->getNumber());
