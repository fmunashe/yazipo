<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            [
                'id' => '1',
                'name' => 'Unknown',
                'description' => 'Unknown',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '2',
                'name' => 'Rutendo Magwa',
                'description' => 'Youth Advocates Content Creator',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '3',
                'name' => 'Veronica Muzvondiwa',
                'description' => 'Youth Advocates Content Creator',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '4',
                'name' => 'Lister Gutsire',
                'description' => 'Youth Advocates Content Creator',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '5',
                'name' => 'Leon Matewe',
                'description' => 'Youth Advocates Content Creator',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '6',
                'name' => 'Rutendo Magwa ',
                'description' => 'Youth Advocates Content Creator',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '7',
                'name' => 'Courage Shumba',
                'description' => 'Youth Advocates Content Creator',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '8',
                'name' => 'Lister Gutsire',
                'description' => 'Youth Advocates Content Creator',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '9',
                'name' => 'Diana Manditsera',
                'description' => 'Youth Advocates Content Creator',
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ]
        ];

        foreach ($authors as $author) {
            Author::query()->firstOrCreate($author, $author);
        }
    }
}
