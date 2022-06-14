<?php

class Register{ // New class Register

    // private attributes
    private $name;
    private $email;
    private $password;

    //Getters
    public function getName(){

        return $this->name;

    }
    public function getEmail(){


        return $this->email;

    }
    public function getPassword(){


        return $this->password;

    }

    //Setters
    public function setName($nomine){

        $this->name = $nomine;

    }
    public function setEmail($littera){

        $this->email = $littera;

    }
    public function setPassword($dubius){

        $this->password = $dubius;

    }

    //Magic method when echoing the object
    public function __toString(){
        
        return json_encode(array(
            'name'=>$this->getName(),
            'e-mail'=>$this->getEmail(),
            'password'=>$this->getPassword(),
        ));

    }
}