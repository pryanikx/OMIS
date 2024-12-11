<?php
namespace App\Repositories;

use App\Models\User;
use App\Interfaces\IUserRepository;

class UserRepository implements IUserRepository
{

    public function __construct()
    {
    }

    public function get_user(string $email): User
    {
        // TODO: Реализация
    }

    public function create_user(User $user): void
    {
        // TODO: Реализация
    }

    public function get_password_hash(string $email): string
    {
        // TODO: Реализация
    }
}
