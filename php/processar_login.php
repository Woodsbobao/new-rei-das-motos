
<?php
// login.php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = strtolower(trim($_POST['email'] ?? ''));
    $password = $_POST['password'] ?? '';

    if (!$email || !$password) {
        header('Location: index.php?error=' . urlencode('Informe e-mail e senha.'));
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: index.php?error=' . urlencode('E-mail inválido.'));
        exit;
    }

    // Busca usuário
    $stmt = $pdo->prepare('SELECT id, name, email, password_hash FROM users WHERE email = :email LIMIT 1');
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch();

    if (!$user || !password_verify($password, $user['password_hash'])) {
        header('Location: index.php?error=' . urlencode('Credenciais inválidas.'));
        exit;
    }

    // Autenticado
    $_SESSION['user'] = [
        'id' => $user['id'],
        'name' => $user['name'],
        'email' => $user['email'],
    ];

    // Protege contra fixation: regenerar ID
    session_regenerate_id(true);

    header('Location: dashboard.php'); // crie esta página conforme seu sistema
    exit;
}

// Caso GET direto:
header('Location: index.php');
exit;
?>