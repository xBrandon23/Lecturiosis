<?php

use App\Controllers\IndexController;

class Index {
    public function __construct()
    {
        // Cargar el autoloader para que se puedan usar los namespaces y clases
        require_once __DIR__ . '/App/Core/Autoload.php';
    }

    public function execute()
    {
        // Instanciar el controlador y ejecutar la acción principal
        $controller = new IndexController();
        $controller->index(); // este es el método que hace todo
    }
}

// Ejecución tradicional
// $app = new Index();
// $app->execute();

// Ejecución con objeto anónimo
(new Index())->execute();
