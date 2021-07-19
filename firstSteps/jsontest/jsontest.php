<?php

$vector = array();

array_push($vector, array(
    'name'=>'Iluvatar',
    'call'=>'Eru',
    'number'=>'unus'
));

array_push($vector, array(
    'name'=>'Melkor',
    'call'=>'Desolation'
));

array_push($vector, array('name'=>'Manwe','call'=>'Winds'
));

array_push($vector, array('name'=>'Varda','call'=>'Stars'
));

array_push($vector, array('name'=>'Ulmo','call'=>'Seas'
));

echo json_encode($vector); //function that turns an array into a .json file

?>