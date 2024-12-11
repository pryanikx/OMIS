<?php
namespace App\Services;

use App\Interfaces\IAccountService;
use App\Models\Account;

class AccountService implements IAccountService {
    private IAccountRepository $account_repository;

    public function __construct(IAccountRepository $account_repository)
    {
        $this->account_repository = $account_repository;
    }

    public function get_accounts(int $user_id): array
    {
        // TODO: Реализация метода
    }

    public function add_account(Account $account): bool
    {
        // TODO: Реализация метода
    }

    public function update_account(Account $account): bool
    {
        // TODO: Реализация метода
    }

    public function delete_account(int $account_id): bool
    {
        // TODO: Реализация метода
    }

    public function update_balance(int $account_id, float $amount): bool
    {
        // TODO: Реализация метода
    }
}
