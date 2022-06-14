<?php

namespace Client; // Establishing the Client directory into a namespace directory

class Register extends \Register { //Creating a namespace class Register with the same name of a root class Register
    //When this class is called, the root class will also be called

    public function sale(){
        echo "An item was sold in the name of " . $this->getName();
    }

}