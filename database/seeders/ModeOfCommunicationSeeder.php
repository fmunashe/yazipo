<?php

namespace Database\Seeders;

use App\Models\ModeOfCommunication;
use Illuminate\Database\Seeder;

class ModeOfCommunicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mode_of_comm = [
            [
                'id' => '1',
                'name' => 'CALL - OUTGOING',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ],
            [
                'id' => '2',
                'name' => 'CALL - INCOMING',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ],
            [
                'id' => '3',
                'name' => 'TEXT',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ],
            [
                'id' => '4',
                'name' => 'WHATSAPP',
                'status' => true,
                'created_at' => '2020-08-21 19:14:42',
                'updated_at' => '2020-08-21 19:14:42',
            ]
        ];

        foreach ($mode_of_comm as $com) {
            ModeOfCommunication::query()->firstOrCreate($com, $com);
        }
    }
}
