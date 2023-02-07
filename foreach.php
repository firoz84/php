<?php 

$firoz=[
    [1, 'firoz', 45, 'Bangura','pabna'],
    [2, 'hasan', 56, 'Chartmohor','Rajshahi'],
    [4, 'Rakib', 23, 'Foridpur','pabna'],
    [5, 'rasel', 63, 'Bangura','pabna'],
];
echo '<table>';
foreach( $firoz as list($id, $name, $age, $thana, $district  )){

echo '<tr>';
echo '<td>'.$id.'</td>';
echo '<td>'.$name.'</td>';
echo '<td>'.$age.'</td>';
echo '<td>'.$thana.'</td>';
echo '<td>'.$district.'</td>';

echo '</tr>';
}
echo '</table>';
