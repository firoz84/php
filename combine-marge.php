<?php

$color1= array('red','blue', 'lao','greeen');
$color2= array(2,3, 4,5);

//$color= array_merge($color1, $color2);
$color= array_combine($color1, $color2);




echo '<pre>';
echo print_r($color);
echo '</pre>';