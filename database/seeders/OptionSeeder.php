<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['title' => 'option_create'],
            ['title' => 'option_edit'],
            ['title' => 'option_show'],
            ['title' => 'option_delete'],
            ['title' => 'option_access']
        ];

        foreach ($permissions as $permission) {
            Permission::query()->firstOrCreate($permission, $permission);
        }
    }
}
