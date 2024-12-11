<?php
namespace App\Controllers;

interface IAccountController
{
    public function get_accounts(int $user_id): array;

    public function add_account(array $account): bool;

    public function update_account(array $account): bool;

    public function delete_account(int $account_id): bool;

    public function get_account_balance(int $account_id): float;
}
