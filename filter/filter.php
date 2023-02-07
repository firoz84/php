<?php 

$var= 'firoz.@gmail.com';

// $options= array(
//     "options"=>array(
//         'min_range'=>23,
//         "max_range"=>40
//     )
//     );

$filter = filter_var($var, FILTER_VALIDATE_EMAIL);

    if($filter){ 
        echo $var.' this is a valid email address';
    }else{
        echo $var.' not valid email!';
    }
