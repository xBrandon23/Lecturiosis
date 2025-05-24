<?php
require_once __DIR__ . '/../Core/Autoload.php';
session_start();

use App\Models\Connection;

$input = trim($_POST['searchInput']);
$users = [];
$mensaje = '';

if (is_numeric($input)) {
    // Buscar por ID exacto o parcial si es número
    $sql = "SELECT * FROM users WHERE CAST(id AS CHAR) LIKE :input";
    $db = Connection::getInstance();
    $stmt = $db->prepare($sql);
    $stmt->execute([
        'input' => "%$input%"
    ]);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} elseif (strlen($input) >= 3) {
    // Buscar por nombre o correo si tiene 3+ letras
    $sql = "SELECT * FROM users 
            WHERE LOWER(nombre) LIKE :input 
            OR LOWER(email) LIKE :input";
    $db = Connection::getInstance();
    $stmt = $db->prepare($sql);
    $stmt->execute([
        'input' => '%' . strtolower($input) . '%'
    ]);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $mensaje = 'Por favor, introduce al menos 3 caracteres.';
}

// Manejo final
$_SESSION['users'] = $users;
$_SESSION['input'] = $input;
$_SESSION['mensaje'] = empty($users) ? ($mensaje ?: 'No se encontraron resultados.') : '';

header('Location: /index.php');
exit;