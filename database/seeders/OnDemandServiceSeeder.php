<?php

namespace Database\Seeders;

use App\Models\OnDemandService;
use Illuminate\Database\Seeder;

class OnDemandServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $onDemandService = [
            [
                'id' => 1,
                'name' => "Booking Walk In Counselling",
                'district_id' => 24,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 2,
                'name' => "Condoms",
                'district_id' => 24,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 3,
                'name' => "Referral Slips",
                'district_id' => 3,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ]
        ];

        foreach ($onDemandService as $service) {
            OnDemandService::query()->firstOrCreate($service, $service);
        }
    }
}
