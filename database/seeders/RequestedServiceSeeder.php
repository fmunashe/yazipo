<?php

namespace Database\Seeders;

use App\Models\RequestedService;
use Illuminate\Database\Seeder;

class RequestedServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $requestedServices = [
            [
                'id' => 1,
                'alias' => "Boss T",
                'contact_number' => "4353467778",
                'service_requested' => "Referral Slips",
                'district' => "Harare",
                'country_code' => "ZW",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 2,
                'alias' => "Moto Moto",
                'contact_number' => "334326789",
                'service_requested' => "Booking Walk In Counselling",
                'district' => "Chitungwiza",
                'country_code' => "ZW",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 3,
                'alias' => "Brenda",
                'contact_number' => "333334348888",
                'service_requested' => "Condoms",
                'district' => "Chitungwiza",
                'country_code' => "ZW",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ]
        ];

        foreach ($requestedServices as $service) {
            RequestedService::query()->firstOrCreate($service, $service);
        }
    }
}
