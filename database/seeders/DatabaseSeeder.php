<?php

namespace Database\Seeders;

use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Enums\UserRole;
use App\Enums\UserState;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin',
            'password' => Hash::make('1')
        ]);
        Role::create(['name' => 'USER']);
        Role::create(['name' => 'ADMIN']);
        $user = User::where('email', 'admin')->first();
        $user->assignRole(UserRole::ADMIN->value);
        $user->assignRole(UserRole::USER->value);
        $user->state = UserState::ACTIVED->value;
        $user->email_verified_at = now();
        $user->save();
    }
}
