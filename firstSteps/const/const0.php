<h1>Randomizer</h1>
<?php


define("LENGTH",10);
$check = array();

for($i = 0; $i < LENGTH; $i++)
{

    do{

        $cond=false;
        $randomizer = rand(0,LENGTH-1);

        foreach($check as $value){

            if($randomizer == $value){

                $cond=true;
            }
        }
        
        if($cond==false){
            
            array_push($check,$randomizer);
            echo "$randomizer <br>";
            
        }

    }while($cond==true);
}
?>