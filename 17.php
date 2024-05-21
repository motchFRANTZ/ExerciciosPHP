<?php 
    $perifericos = array("Mouse", "Teclado", "Monitor", "Gabinete", "Estabilizador", "Caixa de Som");

    foreach($perifericos as $key => $periferico){
        if(($periferico == "Teclado") || $periferico == ("Gabinete")){
            echo "$key";
        }
    }
?>