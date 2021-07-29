<?php 

function text($callback){

    //Slow proccess

    $callback();
}

text(function(){
    echo "Terminou!";
    }
);

?>