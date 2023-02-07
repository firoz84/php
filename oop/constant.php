<?php 

class Welcome{
    const WELCOME_MESSAGE =" welcome to our website . please site";

    function mgs(){
        return self:: WELCOME_MESSAGE;
    }

}

//echo Welcome ::  WELCOME_MESSAGE;

$wel= new Welcome;

echo $wel->mgs();