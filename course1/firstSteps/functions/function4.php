<?php 

$hierarchy = array(
    array(
        //Start CEO
        'name_role'=>'CEO',
        'staff'=>array(
            //Start Comercial Director
            array(
                'name_role'=>'Comercial director',
                'staff'=>array(
                    //Start Sales manager
                    array(
                        'name_role'=>'Sales manager'
                    )
                    //End Sales manager

                )
            ),
            //End Comercial Director
            //Start Chief Financial Officer (CFO)
            array(
                'name_role'=>'Chief Financial Officer',
                'staff'=>array(
                    //Start Accounts payable manager
                    array(
                        'name_role'=>'Accounts payable manager',
                        'staff'=>array(
                            //Start Payment supervisor
                            array(
                                'name_role'=>'Payment supervisor'
                            )
                            //End Payment supervisor
                        )
                    ),
                    //End Accounts payable manager
                    //Start Accounts payable manager
                    array(
                        'name_role'=>'Accounts receivable manager',
                        'staff'=>array(
                            //Start Supply supervisor
                            array(
                                'name_role'=>'Supply supervisor'
                            )
                            //End Supply supervisor
                        )
                    )
                    //End Accounts payable manager
                )
            )
            //End CFO
        )
        //End CEO
    )
);

function exhibit($roles){
    
    $unordlist="<ul>";

    foreach($roles as $role){

        $unordlist.= "<li>";

        $unordlist.= $role['name_role'];

        $unordlist.= "</li>";

        if(isset($role['staff']) && count($role['staff']) > 0){

            $unordlist.= exhibit($role['staff']);

        }

    }

    $unordlist.="</ul>";

    return $unordlist;

}

echo exhibit($hierarchy);

?>