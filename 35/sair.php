<?php
// Inicia a sessão
session_start();

// Destrói todas as sessões existentes
session_destroy();

// Redireciona para index.php com mensagem informando que o usuário fez logout
header("Location: index.php?mensagem=Você fez logout com sucesso.");
exit;
?>