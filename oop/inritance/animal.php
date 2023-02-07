<?php

class Animal{

    public $name, $age, $home;

    public function __construct($name, $age, $home){
        $this->name = $name;
        $this->age = $age;
        $this->home = $home;
    }

    public function color(){
        echo $this->name;
    }
    public function food(){
        echo $this->age;
    }
    public function weight(){
        echo $this->home;
    }
}