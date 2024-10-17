<?php

namespace Database\Seeders;

use App\Models\Opportunity;
use Illuminate\Database\Seeder;

class OpportunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $opportunitiesEntries = [
            [
                'id' => 1,
                'type' => "Jobs",
                'title' => "Agricultural Business Development officer",
                'description' => "Business development Officer in the agricultural Sector able to work in Rural and remote areas in Zimbabwe.",
                'dueDate' => "10 Aug 2023, 16:00hrs",
                'url' => "https://vacancymail.co.zw/jobs/agricultural-business-development-officer-54360/",
                'postImageUrl' => 'https://vacancymail.s3.amazonaws.com/media/logo_clamore-solar_113045.png',
                'district_id' => 3,
                'province_id' => 3,
                'country_code' => 'ZW',
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 2,
                'type' => "Jobs",
                'title' => "Stores and Purchasing Attachee",
                'description' => "Come work at a growing company that offers great benefits and opportunities to move forward and learn alongside accomplished leaders. We're seeking an innovative Intern to join Team Telco. \nWe expect the candidate to be proactive and have a \"get it done\" spirit. To be successful, you will have solid solving problem skills.",
                'dueDate' => "15 Aug 2023",
                'url' => 'https://vacancymail.co.zw/jobs/stores-and-purchasing-attachee-54354/',
                'postImageUrl' => 'https://vacancymail.s3.amazonaws.com/media/logo_telco_45315.png',
                'district_id' => 3,
                'province_id' => 3,
                'country_code' => 'ZW',
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 6,
                'type' => "Scholarship",
                'title' => "Rhodes Scholarships at Oxford University for International Students",
                'description' => "The Rhodes Scholarships are postgraduate awards supporting exceptional all-round students at the University of Oxford. Established in the will of Cecil Rhodes in 1902, the Rhodes is the oldest and perhaps the most prestigious international scholarship program in the world.",
                'dueDate' => "varies, July-Oct 2023 (annual)",
                'url' => "https://www.scholars4dev.com/3667/rhodes-international-scholarships-at-oxford-university/",
                'postImageUrl' => 'https://via.placeholder.com/400',
                'district_id' => 3,
                'province_id' => 3,
                'country_code' => 'ZW',
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 7,
                'type' => "Scholarship",
                'title' => "UNIL Master’s Grants in Switzerland for Foreign Students",
                'description' => "The University of Lausanne in Switzerland offers the UNIL Master’s Grants on a competitive basis to international students who wish to pursue a Masters Degree at the University.",
                'dueDate' => "1 Nov 2023 (annual)",
                'url' => "https://www.scholars4dev.com/6578/switzerland-univeristy-lausanne-scholarships-for-international-students/",
                'postImageUrl' => 'https://via.placeholder.com/400',
                'district_id' => 3,
                'province_id' => 3,
                'country_code' => 'ZW',
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 8,
                'type' => "Scholarship",
                'title' => "Capenaum Trust Scholarships at Harare High School, Zimbabwe",
                'description' => "In partnership with Econet wireless, Harare High School is providing the Capernaum Trust Scholarships for the academic year 2021-2022. This scholarship programme focuses on the underprivileged members of the society that have proven to have good passes but lacking the financial base to do their education.",
                'dueDate' => "",
                'url' => "",
                'postImageUrl' => 'https://scholarship-positions.com/ezoimgfmt/149818895.v2.pressablecdn.com/wp-content/uploads/2021/06/PhD-Scholarships-in-Geosciences-9-768x448.png?ezimgfmt=ngcb1/notWebP',
                'district_id' => 3,
                'province_id' => 3,
                'country_code' => 'ZW',
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 11,
                'type' => "Grants",
                'title' => "Intergenerational Climate Microgrants Program 2023 ",
                'description' => "Applications for the Intergenerational Climate Microgrants Program 2023 are now open. Microgrants are small grants for parent-led, intergenerational, and family-centered climate engagement work. They aim to help you carry out climate projects and activities, from webinars, to art exhibitions, to communication materials, to campaigning actions. \n The funding is provided by the UMI Fund and the program is implemented by Our Kids’ Climate, with support from Parents For Future Global.",
                'dueDate' => "Deadline: September 15, 2023",
                'url' => "https://opportunitydesk.org/2023/08/03/intergenerational-climate-microgrants-program-2023/",
                'postImageUrl' => 'https://www.nienvironmentlink.org/site/wp-content/uploads/2022/03/Climate-challenge-fund.jpg',
                'district_id' => 3,
                'province_id' => 3,
                'country_code' => 'ZW',
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ]

        ];
        foreach ($opportunitiesEntries as $entry) {
            Opportunity::query()->firstOrCreate($entry, $entry);
        }
    }
}
