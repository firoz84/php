<?php 

$str= "we love php  becouse need to Wp ";

//echo strtoupper($str);
//echo strtolower($str);
//echo ucfirst($str);

//echo lcfirst($str);
//echo ucwords($str);

//echo strlen($str);
// echo '<pre>';
// print_r(str_word_count($str, 2));
// echo '</pre>';

// $str= "we love php but I like you ";
// $firoz= explode(' ', $str, -4);

// echo '<pre>';
// print_r($firoz);
// echo '</pre>';


// $str= array('firoz', 'Jorna','manik', 'siam');

// $firoz= implode('<br/>', $str);

// echo '<pre>';
// print_r($firoz);
// echo '</pre>';

// $firoz= "<h1>we love Our <b>php</b> . I think best <i>Country</i> in this world</h2>";

// echo strip_tags($firoz , '<h1> <in>');

$firoz= "we love Our php . I think best Country in this world";

echo wordwrap($firoz, 2, '<br/>');
