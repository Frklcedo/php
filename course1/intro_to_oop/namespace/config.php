<?php

spl_autoload_register(function($nameClass){  //When instantiating an object, the configuration will recall this function
    
    $dirClass = "class"; // Directory defined by the user for classes

    $fileName= $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"; // file name defined by the name of default directory, the directory separator based on OS (UNIX system uses '/'), the name of the file and it's format
    
    //  ./name\ of\ the\ directory/nameofthefile.php

    echo $fileName . "<hr>";

    $fileName = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");  //str_replace to transform a windows based directory separator into a Unix/MacOs separator when recaping the namespace directory\file

    echo $fileName . "<hr>";
    
    if(file_exists($fileName)){
        require_once($fileName); 
    }

});