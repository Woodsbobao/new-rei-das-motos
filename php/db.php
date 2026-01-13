
<?php
// db.php
$DB_HOST = 'localhost';
$DB_NAME = 'sistema_login';
$DB_USER = 'root';
$DB_PASS = ''; // ajuste conforme sua instalação

try {
    $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4", $DB_USER, $DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die('Erro ao conectar ao banco: ' . $e->getMessage());
}
?>