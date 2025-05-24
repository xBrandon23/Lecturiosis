<?php
$esEdicion = isset($user);
$accion = $esEdicion ? '/App/Actions/UpdateUser.php' : '/App/Actions/CreateUser.php';
$titulo = $esEdicion ? 'Editar Usuario' : 'Crear Usuario';

$nombre = $esEdicion ? $user->getNombre() : '';
$email = $esEdicion ? $user->getEmail() : '';
$password = $esEdicion ? $user->getPassword() : '';
$id = $esEdicion ? $user->getId() : '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: #f2f4f7;
        }
        .form-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .form-header {
            background: #198754;
            color: white;
            padding: 15px;
            border-radius: 15px 15px 0 0;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-card">
                <div class="form-header">
                    <h3><i class="fas fa-user-edit me-2"></i><?= $titulo ?></h3>
                </div>
                <form action="<?= $accion ?>" method="POST" class="mt-4">
                    <?php if ($esEdicion): ?>
                        <input type="hidden" name="id" value="<?= $id ?>">
                    <?php endif; ?>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?= $nombre ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" value="<?= $email ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password" value="<?= $password ?>" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success w-100 me-2"><i class="fas fa-save me-1"></i>Guardar</button>
                        <a href="/index.php" class="btn btn-outline-secondary w-100"><i class="fas fa-times me-1"></i>Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
