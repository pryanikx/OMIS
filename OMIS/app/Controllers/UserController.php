<?php

namespace App\Controllers;

use App\Models\User;
use App\Services\IUserService;

class UserController implements IUserController
{
    private IUserService $user_service;

    public function __construct(IUserService $user_service)
    {
        $this->user_service = $user_service;
    }

    public function register(/*User $user*/): bool
    {
        // Пустая реализация
        return false;
    }

    public function login(string $email, string $password): bool
    {
        // Пустая реализация
        return false;
    }

    public function logout(): bool
    {
        // Пустая реализация
        return false;
    }
}
