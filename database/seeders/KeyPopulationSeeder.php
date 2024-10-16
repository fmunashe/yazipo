<?php

namespace Database\Seeders;

use App\Models\KeyPopulation;
use Illuminate\Database\Seeder;

class KeyPopulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $key_pops = [
            [
                'id' => '1',
                'name' => 'Youth Living With HIV',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ],
            [
                'id' => '2',
                'name' => 'Youth Living With Sex Work',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ],
            [
                'id' => '3',
                'name' => 'Youth Living With Disability',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ],
            [
                'id' => '4',
                'name' => 'LGBTIQ',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ],
            [
                'id' => '5',
                'name' => 'Not Specified',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ],
            [
                'id' => '6',
                'name' => 'Not Key Pops',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ],
        ];

        foreach ($key_pops as $pops) {
            KeyPopulation::query()->firstOrCreate($pops, $pops);
        }
    }
}
