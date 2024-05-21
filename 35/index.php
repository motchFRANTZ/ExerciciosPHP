<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="post">
        <label for="usuario">Usuário: </label>
        <input type="text" name="usuario">

        <label for="senha">Senha: </label>
        <input type="password" name="senha">

        <input type="submit" value="Enviar" name="acao">
    </form>
</body>

</html>

<?php
if (isset($_POST['acao'])) {
    $usuario = filter_input(INPUT_POST, 'usuario');
    $senha = filter_input(INPUT_POST, 'senha');

    $senhaHash = 'f6ba855ff45ea7c2734cd54d62d8bb02';
    $usuarioHash = 'fulanodetal';

    if (($usuario == $usuarioHash) && (md5($senha) == $senhaHash)) {

        session_start();

        $_SESSION['usuario'] = $usuario;

        header("Location: painel.php"); // Adicione o sinal de igual após "Location"
        exit;
    } else {
        echo "Usuário ou senha inválidos.";
    }
}
?>