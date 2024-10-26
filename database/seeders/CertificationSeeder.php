<?php

namespace Database\Seeders;

use App\Models\Certification;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $certifications = [
            [
                'id' => 1,
                'type' => "text",
                'url' => "",
                'question' => "How can you tell if someone has HIV or AIDS?",
                'option1' => "Because of the way they act",
                'option2' => "They Look tired and ill",
                'option3' => "There is no way to Tell",
                'answer' => 3,
                'description' => "You can't tell someone has HIV or AIDS by their physical appearance. The only way to confirm if someone has HIV/AIDS is by doing a lab test",
                'category_id' => 6,
                'status' => 1,
                'created_at' => '2023-11-06 10:14:42',
                'updated_at' => '2023-11-06 10:14:42',
            ],
            [
                'id' => 2,
                'type' => "text",
                'url' => "",
                'question' => "What is HIV?",
                'option1' => "A Virus",
                'option2' => "A Bacterium",
                'option3' => "A Fungus",
                'answer' => 1,
                'description' => "HIV is a retrovirus that attacks the cells of the human immune system",
                'category_id' => 6,
                'status' => 1,
                'created_at' => '2023-11-06 10:14:42',
                'updated_at' => '2023-11-06 10:14:42',
            ],
            [
                'id' => 3,
                'type' => "text",
                'url' => "",
                'question' => "What does STD stand for?",
                'option1' => "Sexually Transmitted Disease",
                'option2' => "Special Treatment Doctor",
                'option3' => "Standard Transmission Deficiency",
                'answer' => 1,
                'description' => "STD stand for: Sexually Transmitted Disease",
                'category_id' => 6,
                'status' => 1,
                'created_at' => '2023-11-06 10:14:42',
                'updated_at' => '2023-11-06 10:14:42',
            ],
            [
                'id' => 4,
                'type' => "text",
                'url' => "",
                'question' => "Dating someone that is older than you puts you at risk of getting HIV",
                'option1' => "YES",
                'option2' => "NO",
                'option3' => "YES If they had unprotected sex with an infected partner",
                'answer' => 3,
                'description' => "Dating older partners does not give you HIV. But there is a risk of getting HIV in the sense that older people might have had more sexual partners before they met you hence there is a slight bigger risk of you getting HIV if and only if they were involved with someone that was infected",
                'category_id' => 6,
                'status' => 1,
                'created_at' => '2023-11-06 10:14:42',
                'updated_at' => '2023-11-06 10:14:42',
            ],
            [
                'id' => 5,
                'type' => "text",
                'url' => "",
                'question' => "Who should carry protection between a sexually active couple",
                'option1' => "Both Partners",
                'option2' => "Male Partners",
                'option3' => "Female Partners",
                'answer' => 1,
                'description' => "Both Partners should carry protection. But Female partners should enforce that there will be no sex without condom given that a girl child is at a greater disadvantage in an unplanned pregnancy scenario.",
                'category_id' => 6,
                'status' => 1,
                'created_at' => '2023-11-06 10:14:42',
                'updated_at' => '2023-11-06 10:14:42',
            ],
            [
                'id' => 6,
                'type' => "text",
                'url' => "",
                'question' => "Who has a final say about who I date?",
                'option1' => "Friends",
                'option2' => "Family",
                'option3' => "Only Me has a say",
                'answer' => 3,
                'description' => "Even though the final say lies with me, It is important to heed the advice of older people's views like parents or guardians as they can see what we as young people can see, after all they were young people once, we can learn a lot from their experiences",
                'category_id' => 6,
                'status' => 1,
                'created_at' => '2023-11-06 10:14:42',
                'updated_at' => '2023-11-06 10:14:42',
            ],
            [
                'id' => 7,
                'type' => "text",
                'url' => "",
                'question' => "Which is the purpose of a Roll-On Deodorant?",
                'option1' => "Prevent additional sweating",
                'option2' => "Neutralize odor under your arms",
                'option3' => "All The Above",
                'answer' => 2,
                'description' => "The function of deodorant is to neutralize odor under your arms with the help of antimicrobial.",
                'category_id' => 3,
                'status' => 1,
                'created_at' => '2023-11-06 10:14:42',
                'updated_at' => '2023-11-06 10:14:42',
            ],
            [
                'id' => 8,
                'type' => "text",
                'url' => "",
                'question' => "What purpose does a body spray antiperspirant serve?",
                'option1' => "Makes me smell good",
                'option2' => "It adds swagger",
                'option3' => "Prevent additional sweating",
                'answer' => 3,
                'description' => "Body Sprays - reduces the amount of sweat produced by your body ideal to use in other places of your skin like your back, chest, etc.",
                'category_id' => 3,
                'status' => 1,
                'created_at' => '2023-11-06 10:14:42',
                'updated_at' => '2023-11-06 10:14:42',
            ],
            [
                'id' => 9,
                'type' => "text",
                'url' => "",
                'question' => "Which is the best combination for great Oral Hygiene?",
                'option1' => "Toothbrush, Tooth Paste, Floss",
                'option2' => "Toothbrush, Tooth Paste, Floss, Mouth Wash",
                'option3' => "Toothbrush, Fluoride Tooth Paste",
                'answer' => 2,
                'description' => "Toothbrush and any tooth paste aren't enough on their own. One needs additional items like dental Floss to dig deep between your teeth and solutions like Mouth Wash deals with toughest bacteria that causes bad bread and gingivitis etc.",
                'category_id' => 3,
                'status' => 1,
                'created_at' => '2023-11-06 10:14:42',
                'updated_at' => '2023-11-06 10:14:42',
            ]
        ];

        foreach ($certifications as $certificate) {
            Certification::query()->firstOrCreate($certificate, $certificate);
        }
    }
}
