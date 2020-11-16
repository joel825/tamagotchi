<?php

include ("tama.php");

   $valor = $argv;
   
   $animal = new tama();

   foreach($valor as $temp){
       switch($temp){
           case "j":
            $animal->jugar();
           break;
           case "m1":
            $animal->menjar1();
           break;
           case "m2":
            $animal->menjar2();
           break;
           case "d":
            $animal->dormir(); 
       }
   }
   
?>