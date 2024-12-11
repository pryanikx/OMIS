<?php
namespace App\Interfaces;

use App\Models\User;

interface IUserRepository {
    public function get_user(string $email): User;
    public function create_user(User $user): void;
    public function get_password_hash(string $email): string;
}
