<form>

    <p>Fibonacci sequence</p>
    <input type="text" name="fibq">
    <input type="submit" value="Send"> 

</form>

<?php 

echo "<hr>";

if(isset($_GET))
{
    $fibonacci = array(0,1);

    
    for($i=2;$i < (int)$_GET["fibq"]; $i++){

        array_push($fibonacci,$fibonacci[$i-1]+$fibonacci[$i-2]);

    }

    foreach($fibonacci as $v){
        
        echo $v . "<br>";
        
    }
}

?>