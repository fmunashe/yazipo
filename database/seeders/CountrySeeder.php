<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = array(
            array('code' => 'NS', 'status' => 0, 'name' => 'Not Specified', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'DZ', 'status' => 0, 'name' => 'Algeria', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'AO', 'status' => 0, 'name' => 'Angola', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'BJ', 'status' => 0, 'name' => 'Benin', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'BW', 'status' => 0, 'name' => 'Botswana', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'BF', 'status' => 0, 'name' => 'Burkina Faso', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'BI', 'status' => 0, 'name' => 'Burundi', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'CM', 'status' => 0, 'name' => 'Cameroon', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'CV', 'status' => 0, 'name' => 'Cape Verde', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'CF', 'status' => 0, 'name' => 'Central African Republic', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'KM', 'status' => 0, 'name' => 'Comoros', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'CD', 'status' => 0, 'name' => 'Democratic Republic of Congo', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'DJ', 'status' => 0, 'name' => 'Djibouti', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'EG', 'status' => 0, 'name' => 'Egypt', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'GQ', 'status' => 0, 'name' => 'Equatorial Guinea', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'ER', 'status' => 0, 'name' => 'Eritrea', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'ET', 'status' => 0, 'name' => 'Ethiopia', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'GA', 'status' => 0, 'name' => 'Gabon', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'GM', 'status' => 0, 'name' => 'Gambia', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'GH', 'status' => 0, 'name' => 'Ghana', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'GN', 'status' => 0, 'name' => 'Guinea', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'GW', 'status' => 0, 'name' => 'Guinea-Bissau', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'CI', 'status' => 0, 'name' => 'Ivory Coast', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'KE', 'status' => 0, 'name' => 'Kenya', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'LS', 'status' => 0, 'name' => 'Lesotho', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'LR', 'status' => 0, 'name' => 'Liberia', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'LY', 'status' => 0, 'name' => 'Libya', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'MG', 'status' => 0, 'name' => 'Madagascar', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'MW', 'status' => 0, 'name' => 'Malawi', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'ML', 'status' => 0, 'name' => 'Mali', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'MR', 'status' => 0, 'name' => 'Mauritania', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'MU', 'status' => 0, 'name' => 'Mauritius', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'MA', 'status' => 0, 'name' => 'Morocco', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'MZ', 'status' => 0, 'name' => 'Mozambique', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'NA', 'status' => 0, 'name' => 'Namibia', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'NE', 'status' => 0, 'name' => 'Niger', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'NG', 'status' => 0, 'name' => 'Nigeria', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'CG', 'status' => 0, 'name' => 'Republic of the Congo', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'RE', 'status' => 0, 'name' => 'Reunion', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'RW', 'status' => 0, 'name' => 'Rwanda', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'SH', 'status' => 0, 'name' => 'Saint Helena', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'ST', 'status' => 0, 'name' => 'Sao Tome and Principe', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'SN', 'status' => 0, 'name' => 'Senegal', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'SC', 'status' => 0, 'name' => 'Seychelles', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'SL', 'status' => 0, 'name' => 'Sierra Leone', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'SO', 'status' => 0, 'name' => 'Somalia', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'ZA', 'status' => 0, 'name' => 'South Africa', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'SS', 'status' => 0, 'name' => 'South Sudan', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'SD', 'status' => 0, 'name' => 'Sudan', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'SZ', 'status' => 0, 'name' => 'Swaziland', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'TZ', 'status' => 0, 'name' => 'Tanzania', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'TG', 'status' => 0, 'name' => 'Togo', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'TN', 'status' => 0, 'name' => 'Tunisia', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'UG', 'status' => 0, 'name' => 'Uganda', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'EH', 'status' => 0, 'name' => 'Western Sahara', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'ZM', 'status' => 0, 'name' => 'Zambia', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
            array('code' => 'ZW', 'status' => 1, 'name' => 'Zimbabwe', 'created_at' => '2022-04-15 19:14:42', 'updated_at' => '2022-04-15 19:14:42'),
        );

        foreach ($countries as $country) {
            Country::query()->firstOrCreate($country,$country);
        }
    }
}
