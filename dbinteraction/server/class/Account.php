<?php

class Account{
    private $name;
    private $password;
    private $checkPass;
    public function getName(){
        return $this->name;
    }
    public function setName($nomen){
        $this->name=$nomen;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($pw){
        $this->password=$pw;
    }
    public function getCheckPass(){
        return $this->checkPass;
    }
    public function setCheckPass($pw){
        $this->checkPass=$pw;
    }
}