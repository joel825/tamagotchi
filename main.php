<?php

include("tama.php");

$valor = $argv;

$animal = new tama();

foreach ($valor as $index=>$temp) {
    if ($index != 0) {
        //Edat
        $animal->calcularEdat($index); 
        $animal->setEdat($index);
        switch ($temp) {
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
        

        //Posar Gana
        if ($index % 2 == 0 and $animal->getGana() == False) {
            $animal->setGana(True);
        }
    
        echo "\n\n\n================================";
    }
}
