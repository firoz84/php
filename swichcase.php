<?php 



$mark= 40;

switch($mark){
        case ($mark >=80):
            echo 'you have got A+';
            break;
        case ($mark >=70  && $mark <= 79): 
            echo 'you have got A-';
            break;
        case ($mark >=60 && $mark <=69):
            echo 'you have got B';   
            break;
            default:
            echo 'you are fail';         
}