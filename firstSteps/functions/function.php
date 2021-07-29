<form>

    <p>Say your name</p>
    <input type="text" name="a">
    <p><input type="submit" value="Send"></p>

</form>

<?php

function helloW(){

    echo "Hello World" . "<br>";

}
function hello($text){

    $message ="Hello $text <br>";
    
    return $message;

}

helloW();

echo hello($_GET["a"]);


?>