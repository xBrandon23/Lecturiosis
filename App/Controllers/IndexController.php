<?php
namespace App\Controllers;

use App\Models\User;

class IndexController {
    public function index(): void {
        // Instanciar un usuario y asignar atributos usando setters
        $user = new User();
        $user->setName("John Doe");
        $user->setEmail("john@example.com");

        // Llamar a los métodos definidos (save, findById, delete, getAll)
        $user->save();
        $user->findById(1);
        $user->delete();
        $user->getAll();

        // Cargar la vista correspondiente
        require __DIR__ . "/../Views/IndexView.php";
    }
}
