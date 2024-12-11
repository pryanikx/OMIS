<?php
namespace App\Services;

use App\Interfaces\IUserService;
use App\Interfaces\IUserRepository;
use App\Models\User;

class UserService implements IUserService
{
    private $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(User $user): bool
    {
        // TODO: Реализация
    }

    public function login(string $email, string $password): bool
    {
        // TODO: Реализация
    }

    public function logout(): bool
    {
        // TODO: Реализация
    }
}