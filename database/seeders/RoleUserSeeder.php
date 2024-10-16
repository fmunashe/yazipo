<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->where('email', '=', 'admin@yazipo.com')->first()->roles()->sync(1);
        User::query()->where('email', '=', 'user@yazipo.com')->first()->roles()->sync(2);
        User::query()->where('email', '=', 'goldenchimsy@gmail.com')->first()->roles()->sync(1);
        User::query()->where('email', '=', 'jacqui@goldyouth.org')->first()->roles()->sync(1);
        User::query()->where('email', '=', 'tatendasongore@gmail.com')->first()->roles()->sync(1);
    }
}
