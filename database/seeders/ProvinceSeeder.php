<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $country = Country::query()->where('name', '=', 'Zimbabwe')->first();
        $provinces = [
            [
                'id' => 1,
                'country_id' => $country->id,
                'name' => 'Not Specified',
                'created_at' => '2022-05-04 15:08:16',
                'updated_at' => '2022-05-04 12:08:16',
            ],
            [
                'id' => 2,
                'country_id' => $country->id,
                'name' => 'Bulawayo Province',
                'created_at' => '2022-05-04 15:08:16',
                'updated_at' => '2022-05-04 12:08:16',
            ],
            [
                'id' => 3,
                'country_id' => $country->id,
                'name' => 'Harare Province',
                'created_at' => '2022-05-04 15:08:16',
                'updated_at' => '2022-05-04 12:08:16',
            ],
            [
                'id' => 4,
                'country_id' => $country->id,
                'name' => 'Manicaland Province',
                'created_at' => '2022-05-04 15:08:16',
                'updated_at' => '2022-05-04 12:08:16',
            ],
            [
                'id' => 5,
                'country_id' => $country->id,
                'name' => 'Mashonaland Central Province',
                'created_at' => '2022-05-04 15:08:16',
                'updated_at' => '2022-05-04 12:08:16',
            ],
            [
                'id' => 6,
                'country_id' => $country->id,
                'name' => 'Mashonaland East Province',
                'created_at' => '2022-05-04 15:08:16',
                'updated_at' => '2022-05-04 12:08:16',
            ],
            [
                'id' => 7,
                'country_id' => $country->id,
                'name' => 'Mashonaland West Province',
                'created_at' => '2022-05-04 15:08:16',
                'updated_at' => '2022-05-04 12:08:16',
            ],
            [
                'id' => 8,
                'country_id' => $country->id,
                'name' => 'Masvingo Province',
                'created_at' => '2022-05-04 15:08:16',
                'updated_at' => '2022-05-04 12:08:16',
            ],
            [
                'id' => 9,
                'country_id' => $country->id,
                'name' => 'Matabeleland North Province',
                'created_at' => '2022-05-04 15:08:16',
                'updated_at' => '2022-05-04 12:08:16',
            ],
            [
                'id' => 10,
                'country_id' => $country->id,
                'name' => 'Matabeleland South Province',
                'created_at' => '2022-05-04 15:08:16',
                'updated_at' => '2022-05-04 12:08:16',
            ],
            [
                'id' => 11,
                'country_id' => $country->id,
                'name' => 'Midlands Province',
                'created_at' => '2022-05-04 15:08:16',
                'updated_at' => '2022-05-04 12:08:16',
            ],
        ];

        foreach ($provinces as $province) {
            Province::query()->firstOrCreate($province, $province);
        }
    }
}
