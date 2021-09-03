<?php

define('PULO', "<br>");

class User{
    private $nome;
    private $sobrenome;
    private $idade;
    private $email;
    private $senha;
    private $estado;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($input){
        $this->nome=$input;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function setSobrenome($input){
        $this->sobrenome=$input;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($input){
        $this->idade=$input;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($input){
        $this->email=$input;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($input){
        $this->senha=$input;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($input){
        $this->estado=$input;
    }

    public function __toString(){
        $call = $this->getNome() . PULO;
        $call .= $this->getSobrenome() . PULO;
        $call .= $this->getIdade() . PULO;
        $call .= $this->getEmail() . PULO;
        $call .= $this->getSenha() . PULO;
        $call .= $this->getEstado();
        return $call;
    }

    public function assignData(){
        
    }
}