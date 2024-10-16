<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project = [
            [
                'id' => '1',
                'name' => 'AMPLIFY',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ],
            [
                'id' => '2',
                'name' => 'AMPLIFY RESTLESS',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ],
            [
                'id' => '3',
                'name' => 'CHIEDZA (BRTI)',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ],
            [
                'id' => '4',
                'name' => 'DREAMS',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ],
            [
                'id' => '5',
                'name' => 'EGMONT',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ],
            [
                'id' => '6',
                'name' => 'FP2020',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ],
            [
                'id' => '7',
                'name' => 'OPHID (CSO)',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ],
            [
                'id' => '8',
                'name' => 'Not Specified',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ]
        ];
        foreach ($project as $pro) {
            Project::query()->firstOrCreate($pro, $pro);
        }
    }
}
