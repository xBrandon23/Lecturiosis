<?php
namespace App\Models;
use App\Contracts\ModelInterface;

use PDO;
use PDOException;

class Connection
{

    public static $instance = null;

    private function __construc()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {

            $db_server = '127.0.0.1';
            $db_user = 'root';
            $db_name = 'lecturiosis';
            $db_password = 'ileana1102';

            try {
                self::$instance = new \PDO(
                    "mysql:host=$db_server;dbname=$db_name",
                    $db_user,
                    $db_password
                );
                self::$instance->setAttribute(
                    \PDO::ATTR_ERRMODE,
                    \PDO::ERRMODE_EXCEPTION
                );
            } catch (\Throwable $th) {
                echo "Error de conexión: " . $th->getMessage();
                exit;
            }
        }
        return self::$instance;
    }
protected static array $dbFake = [];

public function save(): void {
    self::$dbFake[] = get_object_vars($this);
    echo "Usuario simulado guardado";
    echo "<br>";
}

    public function delete(): void {
        echo "Eliminando usuario de la base de datos";
        echo "<br>";
    }

    public function findById(int $id): void {
        echo "Buscando usuario con ID $id en la base de datos";
        echo "<br>";
    }

    public function getAll(): void {
        echo "Obteniendo todos los registros de usuario";
        echo "<br>";
    }
}
