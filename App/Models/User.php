<?php
namespace App\Models;

class User extends Model {

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
}
