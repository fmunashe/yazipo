<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => '1',
                'name' => 'Money Flow',
                'imageUrl' => 'https://chimsy.co.zw/images/ama2k/images/money_flow.jpeg',
                'iconUrl' => 'https://chimsy.co.zw/images/ama2k/icons/money_flow.png',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '2',
                'name' => 'Leadership Skills',
                'imageUrl' => 'https://chimsy.co.zw/images/ama2k/images/leadership.jpeg',
                'iconUrl' => 'https://chimsy.co.zw/images/ama2k/icons/leadership.png',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '3',
                'name' => 'Mental Health & Well-being',
                'imageUrl' => 'https://chimsy.co.zw/images/ama2k/images/mental_health.png',
                'iconUrl' => 'https://chimsy.co.zw/images/ama2k/icons/mental_health.png',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '4',
                'name' => 'Rights & Responsibilities',
                'imageUrl' => 'https://chimsy.co.zw/images/ama2k/images/rights_responsibilities.jpg',
                'iconUrl' => 'https://chimsy.co.zw/images/ama2k/icons/violence.png',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '5',
                'name' => 'Reproductive Health',
                'imageUrl' => 'https://chimsy.co.zw/images/ama2k/images/reproductive_health.jpeg',
                'iconUrl' => 'https://chimsy.co.zw/images/ama2k/icons/reproductive_health.png',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '6',
                'name' => 'Dating & Sex Talk',
                'imageUrl' => 'https://chimsy.co.zw/images/ama2k/images/dating.png',
                'iconUrl' => 'https://chimsy.co.zw/images/ama2k/icons/dating_relationships.png',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '7',
                'name' => 'Not Specified',
                'imageUrl' => 'https://chimsy.co.zw/images/ama2k/images/not_specified.png',
                'iconUrl' => 'https://chimsy.co.zw/images/ama2k/icons/not_specified.png',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
        ];

        foreach ($categories as $category){
            Category::query()->firstOrCreate($category,$category);
        }
    }
}
