<form>
    <p>Initial debt</p>
    <input type="text" name="a">
    <p>Payment per month</p>
    <input type="text" name="b">
    <p><input type="submit" value="Send"></p>
</form>

<?php

if(isset($_GET) && (float)$_GET["b"] > 0){

    $cont = 0;
    $debt = $idebt = (float)$_GET["a"];
    $parc = (float)$_GET["b"];
    $tipo = false;

    echo "<hr>R$ $debt";

    do{
        
        if($parc>$debt){

            $last = $debt;
            $debt -=$last;
            $tipo = true;
            echo "<small> -R$" . $last . "</small><br>" . "R$" . $debt;

        }   
        else{
            
            $debt -= $parc;
            echo "<small> -R$" . $parc . "</small><br>" . "R$" . $debt;
        }
        $cont += 1;    

    }
    while($debt > 0);

    echo "<hr>";

    echo "<br>Initial debt: R$" . $idebt . "<br>";
    echo "Payment per month: R$" . $parc . "<br>";
    if ($tipo == true) echo "last payment: R$" . $last . "<br>";
    echo "<br><strong>Total: " . $cont . " months to pay off the debt";

}

?>