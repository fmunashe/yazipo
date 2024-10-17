<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencies = [
            [
                'id' => 1,
                'from' => 'ZAR',
                'to' => 'NAD',
                'rate' => 1.01,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 2,
                'from' => 'NAD',
                'to' => 'ZAR',
                'rate' => 0.99,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
        ];

        foreach ($currencies as $currency) {
            Currency::query()->firstOrCreate($currency, $currency);
        }
    }
}
