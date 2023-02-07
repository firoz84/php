<?php

// class Student{
//     public $name= "John";
//     public $age=23;
// }

// $name= new Student();
// echo $name->name;
// echo $name->age;

class Math{
    public $a,$b , $c;
    function sum(){
        $this->a= $this->b + $this->c;
        return $this->a;
    }
    function abs(){
        $this->a= $this->c - $this->b;
        return $this->a;
    }
    
}

$firoz= new Math();
$firoz->c=30;
$firoz->b=20;
echo $firoz->sum();

echo '<br/>';
echo $firoz->abs();