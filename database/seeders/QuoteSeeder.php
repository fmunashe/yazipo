<?php

namespace Database\Seeders;

use App\Models\Quote;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quotesEntries = [
            [
                'id' => 1,
                'author' => "Jackson Brown, Jr",
                'quote' => "The best preparation for tomorrow is doing your best today",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 2,
                'author' => "Napoleon Hill",
                'quote' => "The starting point of all achievement is desire.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 3,
                'author' => "Helen Keller",
                'quote' => "The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart|",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 4,
                'author' => "Swami Sivananda",
                'quote' => "Put your heart, mind, and soul into even your smallest acts. This is the secret of success",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 5,
                'author' => "Benjamin Franklin",
                'quote' => "The best thing to give to your enemy is forgiveness; to an opponent, tolerance; to a friend, your heart; to your child, a good example; to a father, deference; to your mother, conduct that will make her proud of you; to yourself, respect; to all men, charity",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 6,
                'author' => "Jonas Salk",
                'quote' => "Hope lies in dreams, in imagination and in the courage of those who dare to make dreams into reality",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 7,
                'author' => "Anne Frank",
                'quote' => "We all live with the objective of being happy; our lives are all different and yet the same",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 8,
                'author' => "Steven Van Zandt",
                'quote' => "Touch the earth, speak of love, walk on common ground",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 9,
                'author' => "Thurgood Marshall",
                'quote' => "In recognizing the humanity of our fellow beings, we pay ourselves the highest tribute",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 10,
                'author' => "Bangambiki Habyarimana",
                'quote' => "Respect is love in action",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 11,
                'author' => "Annie Besant",
                'quote' => "No soul that aspires can ever fail to rise; no heart that loves can ever be abandoned. Difficulties exist only that in overcoming them we may grow strong, and they who have suffered are able to save",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 12,
                'author' => "Bertrand Russell",
                'quote' => "One must care about a world one will not see",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 13,
                'author' => "Robert Collier",
                'quote' => "Success is the sum of small efforts, repeated day-in and day-out.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 14,
                'author' => "Thomas J. Watson",
                'quote' => "If you want to achieve excellence, you can get there today. As of this second, quit doing less-than-excellent work.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 15,
                'author' => "Michael John Bobak",
                'quote' => "All progress takes place outside the comfort zone.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 16,
                'author' => "Philippos",
                'quote' => "You may only succeed if you desire succeeding; you may only fail if you do not mind failing.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 17,
                'author' => "Mark Twain",
                'quote' => "Courage is resistance to fear, mastery of fear–not absence of fear.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 18,
                'author' => "Zig Ziglar",
                'quote' => "People often say that motivation doesn’t last. Well, neither does bathing–that’s why we recommend it daily.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 19,
                'author' => "Earl Nightingale",
                'quote' => "We become what we think about most of the time, and that’s the strangest secret.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 20,
                'author' => "Vidal Sassoon",
                'quote' => "The only place where success comes before work is in the dictionary.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 21,
                'author' => "Les Brown",
                'quote' => "Too many of us are not living our dreams because we are living our fears.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 22,
                'author' => "Henry Kravis",
                'quote' => "A real entrepreneur is somebody who has no safety net underneath them.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 23,
                'author' => "Mark Caine",
                'quote' => "The first step toward success is taken when you refuse to be a captive of the environment in which you first find yourself.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 24,
                'author' => "Tony Robbins",
                'quote' => "People who succeed have momentum. The more they succeed, the more they want to succeed, and the more they find a way to succeed. Similarly, when someone is failing, the tendency is to get on a downward spiral that can even become a self-fulfilling prophecy.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 25,
                'author' => "Audre Lorde",
                'quote' => "When I dare to be powerful, to use my strength in the service of my vision, then it becomes less and less important whether I am afraid.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 26,
                'author' => "Mark Twain",
                'quote' => "Whenever you find yourself on the side of the majority, it is time to pause and reflect.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 27,
                'author' => "Bruce Lee",
                'quote' => "The successful warrior is the average man, with laser-like focus.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 28,
                'author' => "Roger Staubach",
                'quote' => "There is no traffic jam along the extra mile.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 29,
                'author' => "Dale Carnegie",
                'quote' => "Develop success from failures. Discouragement and failure are two of the surest stepping stones to success.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 30,
                'author' => "Jim Rohn",
                'quote' => "If you don’t design your own life plan, chances are you’ll fall into someone else’s plan. And guess what they have planned for you? Not much.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 31,
                'author' => "Gurbaksh Chahal",
                'quote' => "If you genuinely want something, don’t wait for it–teach yourself to be impatient.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 32,
                'author' => "Robert Kiyosaki",
                'quote' => "Don’t let the fear of losing be greater than the excitement of winning.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 33,
                'author' => "T. Harv Eker",
                'quote' => "If you want to make a permanent change, stop focusing on the size of your problems and start focusing on the size of you!",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 34,
                'author' => "Steve Jobs",
                'quote' => "You can’t connect the dots looking forward; you can only connect them looking backwards. So you have to trust that the dots will somehow connect in your future. You have to trust in something–your gut, destiny, life, karma, whatever. This approach has never let me down, and it has made all the difference in my life.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 35,
                'author' => "Robert Frost",
                'quote' => "Two roads diverged in a wood and I took the one less traveled by, and that made all the difference.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 36,
                'author' => "Eleanor Roosevelt",
                'quote' => "Great minds discuss ideas; average minds discuss events; small minds discuss people.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 37,
                'author' => "Thomas A. Edison",
                'quote' => "I have not failed. I’ve just found 10,000 ways that won’t work.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 38,
                'author' => "Kim Garst",
                'quote' => "If you don’t value your time, neither will others. Stop giving away your time and talents–start charging for it.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 39,
                'author' => "David Brinkley",
                'quote' => "A successful man is one who can lay a firm foundation with the bricks others have thrown at him.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 40,
                'author' => "Eleanor Roosevelt",
                'quote' => "No one can make you feel inferior without your consent.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 41,
                'author' => "Henry Ford",
                'quote' => "The whole secret of a successful life is to find out what is one’s destiny to do, and then do it.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 42,
                'author' => "Winston Churchill",
                'quote' => "If you’re going through hell keep going.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 43,
                'author' => "Anonymous",
                'quote' => "The ones who are crazy enough to think they can change the world, are the ones who do.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 44,
                'author' => "Anonymous",
                'quote' => "Don’t raise your voice, improve your argument.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 45,
                'author' => "Oscar Wilde",
                'quote' => "What seems to us as bitter trials are often blessings in disguise.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 46,
                'author' => "Anonymous",
                'quote' => "The meaning of life is to find your gift. The purpose of life is to give it away.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 47,
                'author' => "Bruce Feirstein",
                'quote' => "The distance between insanity and genius is measured only by success.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 48,
                'author' => "Lolly Daskal",
                'quote' => "When you stop chasing the wrong things, you give the right things a chance to catch you.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 49,
                'author' => "Walt Disney",
                'quote' => "All our dreams can come true if we have the courage to pursue them.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 50,
                'author' => "Swami Vivekananda",
                'quote' => "Take up one idea. Make that one idea your life–think of it, dream of it, live on that idea. Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea alone. This is the way to success.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 51,
                'author' => "Anonymous",
                'quote' => "Trust because you are willing to accept the risk, not because it’s safe or certain.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 52,
                'author' => "Jim Rohn",
                'quote' => "If you are not willing to risk the usual you will have to settle for the ordinary.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 53,
                'author' => "Anonymous",
                'quote' => "To live a creative life, we must lose our fear of being wrong.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 54,
                'author' => "John Wooden",
                'quote' => "Things work out best for those who make the best of how things work out.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 55,
                'author' => "Anonymous",
                'quote' => "If you want to achieve greatness stop asking for permission.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 56,
                'author' => "Albert Einstein",
                'quote' => "If you can’t explain it simply, you don’t understand it well enough.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 57,
                'author' => "Anonymous",
                'quote' => "No masterpiece was ever created by a lazy artist.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 58,
                'author' => "Oprah Winfrey",
                'quote' => "I believe that the only courage anybody ever needs is the courage to follow your own dreams.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 59,
                'author' => "Nathaniel Hawthorne",
                'quote' => "Happiness is a butterfly, which when pursued, is always beyond your grasp, but which, if you will sit down quietly, may alight upon you.",
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ]
        ];

        foreach ($quotesEntries as $quotesEntry) {
            Quote::query()->firstOrCreate($quotesEntry, $quotesEntry);
        }
    }
}
