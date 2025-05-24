<?php
require_once __DIR__ . '/../Core/Autoload.php';
session_start();

use App\Models\Connection;

$input = trim($_POST['searchInput']);

if (strlen($input) >= 3) {
    $sql = "SELECT * FROM users WHERE nombre LIKE :input OR email LIKE :input";
    $db = Connection::getInstance();
    $stmt = $db->prepare($sql);
    $stmt->execute([
        'input' => "%$input%"
    ]);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION['users'] = $users;
    $_SESSION['input'] = $input;
    $_SESSION['mensaje'] = count($users) > 0 ? '' : 'No se encontraron resultados.';
} else {
    $_SESSION['mensaje'] = 'Por favor, introduce al menos 3 caracteres.';
}

header('Location: /index.php');
exit;