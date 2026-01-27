<?php
session_start();
require 'db.php';

if (!isset($_SESSION['users'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel Admin</title>
</head>
<body>

<h1>Painel Administrativo</h1>

<p>Aqui você pode adicionar coleções.</p>

<a href="logout.php">Sair</a>

</body>
</html>