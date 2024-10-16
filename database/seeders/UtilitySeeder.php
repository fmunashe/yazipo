<?php

namespace Database\Seeders;

use App\Models\Utility;
use Illuminate\Database\Seeder;

class UtilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $utilities = [
            [
                'id' => 1,
                'key' => 'DatabaseVersion',
                'reference' => 'Article',
                'value' => '1',
                'description' => 'This is here to regulate version of Article',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 2,
                'key' => 'DatabaseVersion',
                'reference' => 'Authors',
                'value' => '1',
                'description' => 'This is here to regulate version of Authors',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 3,
                'key' => 'DatabaseVersion',
                'reference' => 'Dictionaries',
                'value' => '1',
                'description' => 'This is here to regulate version of Dictionaries',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ]
        ];

        foreach ($utilities as $utility) {
            Utility::query()->firstOrCreate($utility, $utility);
        }
    }
}
