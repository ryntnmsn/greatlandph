<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class CreateAdminUser extends Command
{
    protected $signature = 'admin:create';

    protected $description = 'Create or promote an admin account';

    public function handle(): int
    {
        $name = trim($this->ask('Admin name'));
        $email = mb_strtolower(trim($this->ask('Admin email')));

        if ($name === '' || ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->error('Enter a name and a valid email address.');

            return self::FAILURE;
        }

        $password = $this->secret('Password (minimum 12 characters)');

        validator(['password' => $password], [
            'password' => ['required', Password::min(12)],
        ])->validate();

        if ($password !== $this->secret('Confirm password')) {
            $this->error('The passwords do not match.');

            return self::FAILURE;
        }

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => Hash::make($password),
                'is_admin' => true,
            ],
        );

        $this->info("Admin account ready for {$email}.");

        return self::SUCCESS;
    }
}
