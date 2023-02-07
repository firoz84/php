<?php
$info=array(
    array(
        'id'=>1,
        'name'=>'firoz',
        'age'=>18,
    ),
    array(
        'id'=>2,
        'name'=>'rasel',
        'age'=>38,
    ),
    array(
        'id'=>3,
        'name'=>'rakib',
        'age'=>15,
    ),
    array(
        'id'=>4,
        'name'=>'hasan',
        'age'=>56,
    )

);

$sirial=array_column($info, 'age');

echo '<pre>';
print_r($sirial);
echo '</pre>';