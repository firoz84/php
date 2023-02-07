<?php

require 'animal.php';

class Dog extends Animal{

}

$dog= new Dog( 'firoz', 23, 'patulipara');

 $dog->color()."<br/>";
 $dog->food()."<br/>";
 $dog->weight();