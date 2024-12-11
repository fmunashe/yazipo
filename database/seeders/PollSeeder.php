<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['title' => 'poll_create'],
            ['title' => 'poll_edit'],
            ['title' => 'poll_show'],
            ['title' => 'poll_delete'],
            ['title' => 'poll_access']
        ];

        foreach ($permissions as $permission) {
            Permission::query()->firstOrCreate($permission, $permission);
        }
    }
}
