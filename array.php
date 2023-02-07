<?php

// $subject=array('bangla','English', 'Phizyces', 'Historical');
// echo '<ul type="I">';
// for($i=0; $i<=3; $i++){
//    echo '<li>'.$subject[$i]. '</li>';
// }
// echo '</ul>';

//=== associated array===>

// $result=array(
//    'Bangla'=>50,
//    'English'=>77,
//    'Phizyces'=>90,
//    'Historical'=>60,
//    'bangla'=>40
// );
// echo '<ul>';
// foreach($result as $key=>$value){
//    echo '<li>'.$key.' '.$value.'</li>';
// }
// echo '</ul>';


// ===== related multidamonal arrays====== 

// $man=array(
//    array(1 , 'bang', 40),
//    array(2 , 'english', 50),
//    array(3 , 'islam', 400),
//    array(4 , 'bang', 40),
//    array(1 , 'bang', 40)
// );

// for($i=0; $i <5 ; $i++){
//    echo "<b>Number is $i<b>";
//    echo "<ul>";
//    for($j=0; $j <3 ; $j++){
//       echo'<li>'.$man[$i][$j] . '</li>';

//    }
//    echo '</ul>';
// }



$firoz=['kola','anaros','kathal', 'labu','lichu'];
echo'<ol>';
foreach($firoz as $value){
   ?>
  <?php  echo '<li>'.$value.'</li>';?>
   <?php
   
}

echo '</ol>';
