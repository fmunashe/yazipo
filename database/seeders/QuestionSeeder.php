<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['title' => 'question_create'],
            ['title' => 'question_edit'],
            ['title' => 'question_show'],
            ['title' => 'question_delete'],
            ['title' => 'question_access']
        ];

        foreach ($permissions as $permission) {
            Permission::query()->firstOrCreate($permission, $permission);
        }
    }
}
