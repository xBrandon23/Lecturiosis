<?php
namespace App\Contracts;

interface ModelInterface {
    public function save(): void;
    public function delete(): void;
    public function findById(int $id): void;
}