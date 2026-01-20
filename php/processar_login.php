
<?php
// login.php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $identificador = strtolower(trim($_POST['identificador'] ?? ''));
    $password = $_POST['password'] ?? '';

    if (!$identificador || !$password) {
        header('Location: Login.php?error=' . urlencode('Informe identificador e senha.'));
        exit;
    }

    // Busca usuário
    $stmt = $pdo->prepare('SELECT id, identificador, password_hash FROM users WHERE identificador = :identificador LIMIT 1');
    $stmt->execute([':identificador' => $identificador]);
    $user = $stmt->fetch();

    if (!$user || !password_verify($password, $user['password_hash'])) {
        header('Location: Login.php?error=' . urlencode('Credenciais inválidas.'));
        exit;
    }

    // Autenticado
    $_SESSION['user'] = [
        'id' => $user['id'],
        'name' => $user['name'],
        'identificador' => $user['identificador'],
    ];

    // Protege contra fixation: regenerar ID
    session_regenerate_id(true);

    header('Location: adm.php'); // crie esta página conforme seu sistema
    exit;
}

// Caso GET direto:
header('Location: Login.php');
exit;
?>