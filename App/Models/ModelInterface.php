<?php
namespace App\Models;

interface ModelInterface {
    public function save(): void;
    public function delete(): void;
    public function findById(int $id): void;
}