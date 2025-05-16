<?php
namespace App\Models;

class User extends Model {
    // La conexión PDO está manejada en la clase Model (superclase).

    // Atributos privados del usuario
    private ?int $id = null;
    private string $name = "";
    private string $email = "";

    // Getters
    public function getId(): ?int {
        return $this->id;
    }
    public function getName(): string {
        return $this->name;
    }
    public function getEmail(): string {
        return $this->email;
    }

    // Setters
    public function setId(int $id): void {
        $this->id = $id;
    }
    public function setName(string $name): void {
        $this->name = $name;
    }
    public function setEmail(string $email): void {
        $this->email = $email;
    }

    // La clase User hereda los métodos save(), delete(), findById() y getAll() de Model.
    // (Opcionalmente, estos métodos se podrían anular aquí para operaciones reales con la base de datos.)
}
