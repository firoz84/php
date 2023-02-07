<?php 

   session_start();

   if(isset($_SESSION["favcolor"])){
    echo $_SESSION["favcolor"] ;
   }


?>