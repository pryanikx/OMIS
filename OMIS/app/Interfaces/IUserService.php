<?php
namespace App\Interfaces;

use App\Models\User;

interface IUserService {
    public function register(User $user): bool;
    public function logout(): bool;
    public function login(string $email, string $password): bool;
}
