<?php
session_start();

// Destrói todas as variáveis de sessão
session_unset();

// Destrói a sessão
session_destroy();

// Redireciona o usuário para a página de login ou inicial
header("Location: ../pages/geral-pages/html/Login.php");
exit();
?>
