<?php
namespace App\Controllers;

use App\Models\User;

class IndexController {
    public function index(): void {
        // Instanciar un usuario y asignar atributos usando setters
        $user = new User();
        $user->setName("Brandon");
        $user->setEmail("brandon23@gmail.com");


        $user->save();
        $user->findById(1);
        $user->delete();
        $user->getAll();

        require __DIR__ . "/../Views/IndexView.php";
    }
}
