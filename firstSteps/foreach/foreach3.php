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
    if((int)$_GET["fibq"]%2 == 0){

        $quant = (int)$_GET["fibq"]/2;
        $cond = false;

    }
    else{

        $quant = ((int)$_GET["fibq"]/2)+0.5;
        $cond = true;

    }

    $firstrep=true;

    while($quant>0){

        foreach($fibonacci as $k=>&$v){
            
            if($cond && $quant==1 && $k==1){

                unset($k,$v);
            }

            else{
                if($firstrep) $firstrep=false;
                else{
                
                    $v += $store;
                                    
                }
                $store = $v; 
            }
            if(isset($v)){
                echo "[$k] => $v";
                echo "<br>";     
            }

        }
          
        $quant -= 1;
    
    }   
      
}

?>