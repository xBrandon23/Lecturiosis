<?php
namespace App\Models;

use PDO;
use PDOException;

abstract class Model implements ModelInterface {
    protected static ?PDO $connection = null;

    public function __construct() {
            // Desactivado para simulación sin base de datos
    /*
    if (self::$connection === null) {
        try {
            self::$connection = new PDO('mysql:host=localhost;dbname=lecturiosis;charset=utf8', 'root', '');
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage() . "<br>";
        }
    }
    */
}
protected static array $dbFake = [];

public function save(): void {
    self::$dbFake[] = get_object_vars($this);
    echo "Usuario simulado guardado en memoria.<br>";
}

    public function delete(): void {
        // Simular operación de borrado
        echo "Eliminando " . static::class . " de la base de datos.<br>";
    }

    public function findById(int $id): void {
        // Simular operación de búsqueda por ID
        echo "Buscando " . static::class . " con ID $id en la base de datos.<br>";
    }

    public function getAll(): void {
        // Simular obtención de todos los registros
        echo "Obteniendo todos los registros de " . static::class . ".<br>";
    }
}
