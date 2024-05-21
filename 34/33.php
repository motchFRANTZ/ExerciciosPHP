<?php 
    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];

        $nomeCoockie = 'nomeCoockie';

        setcookie($nomeCoockie, $nome, time() + 100);
        echo $_COOKIE[$nomeCoockie];
    }

?>