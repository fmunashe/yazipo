<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contactsEntries = [
            [
                'id' => 1,
                'opportunity_id' => 1,
                'type' => "Email",
                'content' => 'clamorerecruit@gmail.com',
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 2,
                'opportunity_id' => 8,
                'type' => 'Email',
                'content' => 'help@scholarship-positions.com',
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ]
        ];

        foreach ($contactsEntries as $contactsEntry) {
            Contact::query()->firstOrCreate($contactsEntry, $contactsEntry);
        }
    }
}
