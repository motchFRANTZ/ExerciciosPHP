<?php
    function ajustar($nome){
        $novo_nome = '';

        $nome_array = str_split($nome);

        foreach($nome_array as $letra){
            if($letra == 'a'){
                $novo_nome .= '@';
            } else {
                $novo_nome .= $letra;
            }
        }

        echo $novo_nome;
    }

    ajustar("alex gustavo frantz");

    

?>