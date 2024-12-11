<?php
namespace App\Interfaces;

use App\Models\Account;

interface IAccountService
{
    public function get_accounts(int $user_id): array;

    public function add_account(Account $account): bool;

    public function update_account(Account $account): bool;

    public function delete_account(int $account_id): bool;

    public function update_balance(int $account_id, float $amount): bool;
}

