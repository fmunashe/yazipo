<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PollResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['title' => 'poll_response_create'],
            ['title' => 'poll_response_edit'],
            ['title' => 'poll_response_show'],
            ['title' => 'poll_response_delete'],
            ['title' => 'poll_response_access']
        ];

        foreach ($permissions as $permission) {
            Permission::query()->firstOrCreate($permission, $permission);
        }
    }
}
