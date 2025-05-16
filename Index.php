<?php

use App\Controllers\IndexController;

class Index {
    public function __construct()
    {
        require_once __DIR__ . '/App/Core/Autoload.php';
    }

    public function execute()
    {
        $controller = new IndexController();
        $controller->index();
    }
}

//Ejecución tradicional
$app = new Index();
$app->execute();

// Ejecución con objeto anónimo
//(new Index())->execute();
