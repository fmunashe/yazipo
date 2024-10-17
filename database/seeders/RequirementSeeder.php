<?php

namespace Database\Seeders;

use App\Models\Requirement;
use Illuminate\Database\Seeder;

class RequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $requirementsEntries = [
            [
                'id' => 1,
                'opportunity_id' => 1,
                'requirement' => "Build and create pipeline for the organization",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 2,
                'opportunity_id' => 1,
                'requirement' => "Market the business and its operations to potential markets",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 3,
                'opportunity_id' => 1,
                'requirement' => "Able to organize activities and execute activities that brings in sales",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 4,
                'opportunity_id' => 1,
                'requirement' => "Analyzing customer feedback data to determine whether customers are satisfied with company products and services",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 5,
                'opportunity_id' => 1,
                'requirement' => "Providing insight into product development and competitive positioning.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 6,
                'opportunity_id' => 1,
                'requirement' => "Conducting market research to identify new business opportunities.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 7,
                'opportunity_id' => 1,
                'requirement' => "Collaborating with company executives to determine the most viable, cost-effective approach to pursue new business opportunities.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 8,
                'opportunity_id' => 1,
                'requirement' => ".Meeting with potential investors to present company offerings and negotiate business deals.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // Stores and Purchasing Attachee
            [
                'id' => 9,
                'opportunity_id' => 2,
                'requirement' => "Bachelor's Degree in Logistics Management/ Procurement/ Supply Chain or equivalent",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 10,
                'opportunity_id' => 2,
                'requirement' => "Good written and verbal communication skills",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 11,
                'opportunity_id' => 2,
                'requirement' => "Digital Literacy",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 12,
                'opportunity_id' => 2,
                'requirement' => "Must have a laptop for work use",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ]
        ];

        foreach ($requirementsEntries as $requirementsEntry) {
            Requirement::query()->firstOrCreate($requirementsEntry, $requirementsEntry);
        }
    }
}
