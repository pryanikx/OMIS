<?php
namespace App\Controllers;

use App\Services\IAccountService;
use App\Models\Account;

class AccountController implements IAccountController
{
    private IAccountService $account_service;

    public function __construct(IAccountService $account_service)
    {
        $this->account_service = $account_service;
    }

    public function get_accounts(int $user_id): array
    {
        // Метод пустой, реализация будет добавлена позже
        return [];
    }

    public function add_account(array $account): bool
    {
        // Метод пустой, реализация будет добавлена позже
        return false;
    }

    public function update_account(array $account): bool
    {
        // Метод пустой, реализация будет добавлена позже
        return false;
    }

    public function delete_account(int $account_id): bool
    {
        // Метод пустой, реализация будет добавлена позже
        return false;
    }

    public function get_account_balance(int $account_id): float
    {
        // Метод пустой, реализация будет добавлена позже
        return 0.0;
    }
}
