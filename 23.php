<?php 
    function imprimir($array){
        foreach($array as $item){
            echo $item . "\n";
        }
    }

    $frutas = array("Maça", "Pera", "Bergamota", "Uva", "Pêssego", "Laranja");

    imprimir($frutas)
?>