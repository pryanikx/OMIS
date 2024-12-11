<?php
namespace App\Repositories;

use App\Interfaces\IAccountRepository;
use App\Models\Account;


class AccountRepository implements IAccountRepository
{
    public function __construct()
    {

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
