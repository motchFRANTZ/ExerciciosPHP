<?php
if (isset($_GET['nome']) && isset($_GET['email'])) {
    $nome = filter_input(INPUT_GET, 'nome');
    $email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);

    if (strlen($nome) < 5) {
        echo 'O nome deve ter no mínimo 5 caractéres';
    } else {
        if (empty($email)) {
            echo "E-mail não preenchido!";
        } else {
            
            $emailCript = md5($email);

            echo "Dados recebidos!";
            header("Location: pagina.php/?email=$emailCript");
            sleep(5);
        }
    }
} else {
    echo 'Dados não recebidos!';
}

