<?php

namespace App\Controllers;

interface IUserController
{
    public function register(/*User $user*/): bool;

    public function login(string $email, string $password): bool;

    public function logout(): bool;
}
