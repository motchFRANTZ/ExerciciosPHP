<?php 
    function explodir($nome){
        $nome_array = explode(" ", $nome);
        return "Olá, " . $nome_array[0];
    }

    print_r(explodir("Alex Gustavo Frantz"));
?>