<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [

                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@yazipo.com',
                'password' => Hash::make('password'),
                'remember_token' => null,
            ],
            [
                'id' => 2,
                'name' => 'User',
                'email' => 'user@yazipo.com',
                'password' => Hash::make('password'),
                'remember_token' => null,
            ],
            [
                'id' => 3,
                'name' => 'Golden Chimusinde',
                'email' => 'goldenchimsy@gmail.com',
                'password' => Hash::make('password'),
                'remember_token' => null,
            ],
            [
                'id' => 4,
                'name' => 'Jacqui Latimer',
                'email' => 'jacqui@goldyouth.org',
                'password' => Hash::make('password'),
                'remember_token' => null,
            ],
            [
                'id' => 5,
                'name' => 'Tatenda Songore',
                'email' => 'tatendasongore@gmail.com',
                'password' => Hash::make('password'),
                'remember_token' => null,
            ],
        ];

        foreach ($users as $user) {
            User::query()->firstOrCreate($user, $user);
        }

    }
}
