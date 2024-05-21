<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METODO POST</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="nome">
        <select name="cidade" id="cidade">
            <option value="cidade1">Rio de Janeiro</option>
            <option value="cidade2">São Paulo</option>
            <option value="cidade3">Rio Grande do Sul</option>
        </select>
        <input type="submit" value="Enviar" name="acao">
    </form>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtendo os valores do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);

    // Verificação do nome
    if (strlen($nome) > 5 && strlen($nome) < 100) {
        echo "<h2>Nome válido: " . htmlspecialchars($nome) . "</h2>";
    } else {
        echo "<h2>O nome deve ter mais de 5 caracteres e menos de 100 caracteres.</h2>";
    }

    // Array associativo de estados
    $estados = array(
        "RJ" => "Rio de Janeiro",
        "SP" => "São Paulo",
        "RS" => "Rio Grande do Sul"
    );

    // Verificação do estado selecionado
    if (array_key_exists($cidade, $estados)) {
        echo "<h2>Estado selecionado: " . htmlspecialchars($estados[$cidade]) . "</h2>";
    } else {
        echo "<h2>Estado inválido.</h2>";
    }
}
?>