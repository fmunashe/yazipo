<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            // Category: Career Guidance
            [
                'id' => '1',
                'country_code' => 'ZA',
                'title' => 'What is a Career Guidance & Counselling Program? ',
                'description' => "It is a comprehensive, developmental program designed to assist individuals in making and implementing informed educational and occupational choices. A career guidance and counseling program develops an individual's competencies in self-knowledge, educational and occupational exploration, and career planning.",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/career_guid%2FWhat%20is%20a%20Career%20Guidance%20%26%20Counselling%20Program.png?alt=media&token=ad4f5629-c701-4fce-8996-1aca454c450b',
                'category_id' => 2,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '2',
                'country_code' => 'ZW',
                'title' => 'What are the Key Components of Successful Career Guidance and Counselling Programs?',
                'description' => '1. Know yourself–your strengths, values, personality, and skills
2. Know your options and learn about each one
3. Make a good decision
These are some of the simple ways to decide which career path to choose. It is not always about monitory benefits, personality and values play a role in the decision not forgetting your interest.
It is always important to ask your self, "Am I really interested in this career?"',
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/career_guid%2FWhat%20are%20the%20Key%20Components%20of%20Successful%20Career%20Guidance%20and%20Counselling%20Programs.png?alt=media&token=a6e2b509-0f27-411e-928b-370095d3123c',
                'category_id' => 2,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '3',
                'country_code' => 'ZW',
                'title' => 'Why is Career Guidance & Counseling Key to The Delivery of Vocational-technical Education',
                'description' => 'Career guidance and counseling programs help individuals acquire the knowledge, skills, and experience necessary to identify options, explore alternatives and succeed in society. These programs better prepare individuals for the changing workplace of the 21st century by:
                teaching labor market changes and complexity of the workplace. Broadening knowledge, skills, and abilities improving,decision making skills increasing self-esteem and motivation building interpersonal effectiveness maximizing career opportunities improving employment marketability and opportunities promoting effective job placement strengthening employer relations',
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/career_guid%2FWhy%20is%20Career%20Guidance%20%26%20Counseling%20Key%20to%20The%20Delivery%20of%20Vocational-technical%20Education.png?alt=media&token=71edcefd-d114-45f2-a921-dcb05d3cbbc3',
                'category_id' => 2,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '4',
                'country_code' => 'ZW',
                'title' => 'Who Benefits from Career Guidance and Counseling Programs?',
                'description' => 'Everyone benefits--youth and adults, male and female, disabled, disadvantaged, minorities, limited English proficient, incarcerated, dropouts, single parents, displaced homemakers, teachers, administrators, parents and employers. when you take career guidance as an adolescent or young person it gives you a map of where you are going what challenges to expect, even how to come up with strategies to deal with potential challenges. A carrer is what you will be doing for the rest of your life it needs to add value to all aspects of your life and not burden you at the same time bringing in income.',
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/career_guid%2FWho%20Benefits%20from%20Career%20Guidance%20and%20Counseling%20Programs.png?alt=media&token=275771ab-005a-453c-985a-cb1fb4f84047',
                'category_id' => 2,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '5',
                'country_code' => 'ZW',
                'title' => 'Where are Career Guidance and Counseling Programs offered?',
                'description' => 'Everywhere--elementary, junior and senior high schools, community colleges, technical institutes, universities, career resource centers, correctional facilities, community-based organizations, human services agencies, community and business organizations, skill clinics, employment and placement services. ',
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/career_guid%2FWhere%20are%20Career%20Guidance%20and%20Counseling%20Programs%20offered.png?alt=media&token=ef155462-f236-445b-af2a-d99127dd46a4',
                'category_id' => 2,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '6',
                'country_code' => 'ZW',
                'title' => 'Home remedies to deal with blackheads and white heads',
                'description' => '',
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/grooming%2FHome%20remedies%20to%20deal%20with%20blackheads%20and%20white%20heads%20.png?alt=media&token=17eae7a2-031d-4757-81fb-e4322deb2269',
                'category_id' => 3,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '7',
                'country_code' => 'ZW',
                'title' => 'Facial Care',
                'description' => 'Blackheads occur when the adolescents’ glands produce extra oil that clogs pores in the skin. If blackheads are not removed, oil continues to back up in the oil gland below the pore, causing pressure and inflammation. If germs get into the pore, pimples can develop. Teens who have blackheads often find help from using a mild soap. Keeping the skin clean and free of excess oil is the',
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipolive.appspot.com/o/grooming_facial_care.png?alt=media&token=2fd1a302-2f0c-4236-83d2-53f2436b3b16',
                'category_id' => 3,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // Category: Dating
            [
                'id' => '8',
                'country_code' => 'ZW',
                'title' => 'Date Rape',
                'description' => "What is Rape?
Rape is A criminal offense defined in most states as forcible sexual relations with a person against that person's will including forcing a body part or object into your vagina, rectum (bottom), or mouth. Date rape is when you are raped by someone you know, like a boyfriend or someone you even like or have a crush on. Both are crimes. Rape is not about sex — it is an act of power by the rapist and it is always wrong.
",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2Fdate%20rape.png?alt=media&token=0a6cae8a-b222-4fb9-821d-7bd212fb4431',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '9',
                'country_code' => 'ZW',
                'title' => 'ACTION TO TAKE WHEN ONE IDENTIFIES ANY TYPE OF VIOLENCE',
                'description' => "ACTION TO TAKE WHEN ONE IDENTIFIES ANY TYPE OF VIOLENCE

1. Communicate to the aggressor 'You don’t want it'.  One has to be assertive.
2. Report persistent harassment to relevant authorities e.g. police, parents, relatives, teacher, church elders' etc. If the authority does not act on your report, take it to higher authority or report it elsewhere. You report must be taken seriously.
3. Never keep or postpone secrets about any type of gender-based violence.
4. If abused by someone in authority, seek audience with a higher authority.
5. In a case of rape, timeous school_helpline is critical for the young person to receive Post Exposure Prophylaxis to prevent HIV infection (within 3 days of event) and emergency contraception for the prevention of pregnancy (within 5 days of event). Refer to the Protocol on the management of survivors of sexual violence.
6. Find out about shelters within the community so as to move away from the aggressor.
7. Seek counselling services if necessary.

NB: The Government is committed to protecting all against gender-based violence. It has ratified, enacted and is implementing several laws and policies such as:    Human Rights, Children's' Rights (1990), Reproductive Health Rights (1996), Child Protection Act, Sexual Offenders Act, Gender Act, Legal Age Of Consent, Legal Age of Majority Act (LAMA), Matrimonial Causes Act, Labour Relations Act, Immovable Property Act and Deceased Persons Family Maintenance Act, Domestic Violence Act and the Convention to Eliminate all forms of Discrimination Against Women (CEDAW).
How to deal with GBV
Respond only, and you’ll be responding forever. Prevent only, and you ignore the survivor in front of you.

Gender-based violence (GBV) is a human rights violation, a public health challenge, and a barrier to civic, social, political, and economic participation. It undermines not only the safety, dignity, overall health status, and human rights of the millions of individuals who experience it, but also the public health, economic stability, and security of nations.

An estimated one in three women worldwide has been beaten, coerced into sex, or otherwise abused in her lifetime

There is need for responsible authorities to :
	- Increase awareness on gender based violence and its impact
	- Improve services for survivors of violence and
	- Strengthen prevention measures.",
                'imageUrl' => 'https://via.placeholder.com/350',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '10',
                'country_code' => 'ZW',
                'title' => 'Conflicts Within Families',
                'description' => "Family conflict refers to active opposition between family members. ... Conflicts may involve different combinations of family members: it can be conflict within the couple or between parents and children or, again, between siblings.
Agreeing to negotiate
Usually, our first angry impulse is to push the point that we are right and win the argument at any cost. Finding a peaceful resolution can be difficult, if not impossible, when both parties stubbornly stick to their guns. It helps if everyone decides as a family to try listening to each other and negotiating instead.

Suggestions include:
Work out if the issue is worth fighting over.
Try to separate the problem from the person.
Try to cool off first if you feel too angry to talk calmly.
Keep in mind that the idea is to resolve the conflict, not win the argument.
Remember that the other party isn’t obliged to always agree with you on everything.
Define the problem and stick to the topic.
Respect the other person’s point of view by paying attention and listening.
Talk clearly and reasonably.
Try to find points of common ground.
Agree to disagree.",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2FConflicts%20Within%20Families.png?alt=media&token=d17eb3ef-c80b-4b80-9692-b2b59f4c904a',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '11',
                'country_code' => 'ZW',
                'title' => 'Cross-Generational Sex: Risks',
                'description' => "UNAIDS general population survey and
the Demographic and Health Surveys (DHS) AIDS
modules2   define it as:
Young women ages 15 to 19 who “have had non-marital sex in the last 12 months with a man who is 10 years or more older than themselves.”
",
                'imageUrl' => 'https://via.placeholder.com/350',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '12',
                'country_code' => 'ZW',
                'title' => 'Do All Virgins Bleed During Their First Time ',
                'description' => "No, not always. Some women will bleed after having sex for the first time, while others won't. Both are perfectly normal. A woman may bleed when she has penetrative sex for the first time because of her hymen breaking.
The hymen is a thin piece of skin that partially covers the entrance to the vagina. It usually breaks during sex, if it hasn't already broken before.
The hymen can break quite easily before a woman has sex for the first time, through: activities such as horse riding and other sports using tampons. A woman may not know her hymen has broken, because it doesn’t always cause pain or noticeable bleeding.
Having a broken hymen therefore doesn't necessarily mean a woman has lost her virginity. If you're concerned about bleeding after sex, get advice from your GP or your nearest sexual health clinic.   ",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2FDo%20All%20Virgins%20Bleed%20During%20Their%20First%20Time.png?alt=media&token=5021cf2c-f668-411f-9c93-15af86e6655b',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '13',
                'country_code' => 'ZW',
                'title' => 'Gender Based Violence (GBV)',
                'description' => "Types of Violence
Sexual Harassment/Violence
- Beating a person to force him/her to have sex
- Touching a person's sexual parts against his/her will
- Using vulgar language and abusive language to coerce someone into having sex
- Putting drugs into a person's drink so that it is easier to have sex with him or her
- Refusing to use contraceptives or condoms
- A woman forced by her husband to have sex when she is feeling unwell or when she does not want to as the husband has STI
- Early/forced marriage with a minor
- Female genital mutilation
- Incest with young boys and girls
- Forced marriage
- Rape/sexual coercion
- Pornographic displays
- Suggestive languages/gestures
- Forced sexual attention
- Indecent exposure
Emotional and Psychological Abuse
- Telling someone she/he is ugly
- Denial of love/affection/sex
- Humiliation
- Refusing to help

Physical Violence
- Peer pressure to join gang to prove manhood by physically attacking other men
- Slapping, beating, pinching, hair pulling, burning, strangling
- Threatening or attacking with a weapon or object
- Throwing objects at a person
- Physically confining (locking in a room or tying up)
- Ripping off clothes
- Bullying
 Kidnapping

Economic Abuse
- Denying to pay children’s school fees
- Refusing women to work
- Not leaving money or resources for the family’s upkeep

ACTION TO TAKE WHEN ONE IDENTIFIES ANY TYPE OF VIOLENCE

	1. Communicate to the aggressor 'You don’t want it'.  One has to be assertive.
	2. Report persistent harassment to relevant authorities e.g. police, parents, relatives, teacher, church elders' etc. If the authority does not act on your report, take it to higher authority or report it elsewhere. You report must be taken seriously.
	3. Never keep or postpone secrets about any type of gender-based violence.
	4. If abused by someone in authority, seek audience with a higher authority.
	5. In a case of rape, timeous school_helpline is critical for the young person to receive Post Exposure Prophylaxis to prevent HIV infection (within 3 days of event) and emergency contraception for the prevention of pregnancy (within 5 days of event). Refer to the Protocol on the management of survivors of sexual violence.
	6. Find out about shelters within the community so as to move away from the aggressor.
	7. Seek counselling services if necessary.

NB: The Government is committed to protecting all against gender-based violence. It has ratified, enacted and is implementing several laws and policies such as:    Human Rights, Children's' Rights (1990), Reproductive Health Rights (1996), Child Protection Act, Sexual Offenders Act, Gender Act, Legal Age Of Consent, Legal Age of Majority Act (LAMA), Matrimonial Causes Act, Labour Relations Act, Immovable Property Act and Deceased Persons Family Maintenance Act, Domestic Violence Act and the Convention to Eliminate all forms of Discrimination Against Women (CEDAW).
How to deal with GBV
Respond only, and you’ll be responding forever. Prevent only, and you ignore the survivor in front of you.

Gender-based violence (GBV) is a human rights violation, a public health challenge, and a barrier to civic, social, political, and economic participation. It undermines not only the safety, dignity, overall health status, and human rights of the millions of individuals who experience it, but also the public health, economic stability, and security of nations.

An estimated one in three women worldwide has been beaten, coerced into sex, or otherwise abused in her lifetime

There is need for responsible authorities to :
	- Increase awareness on gender based violence and its impact
	- Improve services for survivors of violence and
	- Strengthen prevention measures.
",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2Fgbv.png?alt=media&token=97d5d217-3dee-44f5-81b8-d00d630a8e9a',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '14',
                'country_code' => 'ZW',
                'title' => 'Harmful Practices Affecting Young People’s Sexual &',
                'description' => "Harmful practices
Culture and tradition play a significant role in shaping the way young people and adolescents behave and lead their lives. However, young people have become victims of some harmful tradition of these practices, which affect their human and reproductive rights. These practices differ from place to place but primarily affect women.
 Among the most widely practiced practised are:
	- Female genital mutilation/cutting;
	- Early marriage; marriages
	- Wife (widow) inheritance; and sexual violence.

Female Genital Mutilation (FGM)/ Female Genital Cutting (FGC)
Increasingly, FGM/FGC is seen as a violation of basic rights and a form of sexual discrimination. FGM/FGC refers to the removal of all or part of the female external genitalia. It is practiced in more than 30 African, 7 Middle Eastern and 4 Asian countries and even in Western Europe, the UK and the US where certain ethnic groups from these countries have migrated.

Types of FGM/FGC
FGM/FGC is practiced in many forms; the most common ones are:
Sunna: in which the tip of the clitoris and/ or its covering (prepuce) are removed.
Clitoridectomy: where the entire clitoris, the prepuce and adjacent labia are removed.
Infibulation: also known as Pharaonic Circumcision, which is the clitoridectomy followed by sewing up of the vulva. A small opening is left to allow urine and menstrual blood to pass. In some cultures, the woman is cut open by her husband or elderly women on her wedding night. She may be sewn up again if her husband leaves on long trip.

Consequences of FGM/FGC
FGM/FGC doubles the risk of women’s death in childbirth and increases the risk of a child being stillborn (dead before delivery from the uterus) by up to four times. There are also more immediate consequences for women or girls who undergo the practice and these can include:

	- Haemorrhage
	- Chronic urinary and pelvic infections
	- Keloid formation
	- Labial adherences
	- Clitoral cysts
	- Pain-induced shock (since no anaesthetics is used)
	- Urine and menstrual blood retention
	- Damage to urethra and anus
	- Painful scars resulting in painful sexual intercourse
	- Sexual dysfunction
	- Risk of STIs including HIV/AIDS
	- Obstructed labour
	- Psychological trauma
	- Sterility, and
	- Different gynaecological and obstetric problems

Early marriage
Despite national and international laws relating to minimum ages of marriage, marriage of girls below these legal limits (generally set at around 18 years of age for girls – the age is usually higher for boys) is still common in many countries, particularly in rural areas, and among poor or poorly educated communities. The greatest risks associated with early marriage are that the girl will be forced to leave school and end her education, and that an early marriage also means early pregnancy. Early pregnancies, as we have seen in previous sessions, carry risks for both the young mothers and their children. Children born to adolescent mothers are more likely to die during their first year of life than those born to women in their twenties, and are at even greater risk during their second year.

Wife (widow) inheritance
This practice is most common in cultures where men pay a “bride-price” for their wives. If the man dies, several factors converge. Women are more likely to be seen as possessions, something which has been “purchased” by the man and his family and therefore another (male) family member simply “inherits” the wife, just as he might house or cattle. The second is that in cultures where a woman, once married, may not return to her father’s home, there is little choice for the woman (and her children) but to accept whatever security (social, financial) is offered by remaining within her husband’s family. The practice not only devalues women, but is now widely contributing to the spread of STIs, including HIV/AIDS.
.
Sexual Violence

There are several forms of sexual violence. Three of the most common ones are described below.

Sexual abuse
Sexual abuse is defined as “Violation perpetrated by a person who holds, or is perceived to hold, power over someone who is vulnerable” (Shanler 1998:1).
The abuse may have physical, verbal and emotional components. It includes such sexual violations as rape, sexual assault, sexual harassment, incest, and sexual molestation

Sexual harassment
Sexual pressuring of someone in a vulnerable or dependent position - a youth, employee, or student for example - is termed as sexual harassment. Employers, teachers, or other people in authority may use their ability to control or influence jobs or grades to coerce people into sexual relations or punish them if they refuse. In extreme cases, a person may be threatened with being fired or being given bad grades if she or he will not submit to the demand.
Sexual harassment can take a variety of forms, including verbal sexual remarks about clothing or appearance, unnecessary touching or pinching, and demands for sexual favours.

Sexual assault: Rape
Sexual coercion that relies on the threat or use of physical force or takes advantage of circumstances that render a person incapable of giving consent to sexual intercourse (such as when drunk) constitute sexual assault or rape.

When the victim is younger than the legally defined “age of consent,” the age at which a young person is said to be capable of fully understanding and consenting/agreeing to sexual intercourse, the act constitutes statutory rape (often referred to as “defilement”), whether or not coercion is involved. Many countries set 16 as the legal age of consent.
Rape victims suffer both physical and psychological injury. For most, physical wounds are not severe and heal within a few weeks. Psychological pain lasts longer and is often considered to be worse than the physical suffering.
",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2FHarmful%20Practices%20Affecting%20Young%20People%20Sexual.png?alt=media&token=c6bfdfd1-f657-4dea-9c29-9c8b24003ec8',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '15',
                'country_code' => 'ZW',
                'title' => 'How Can I Make Her Stay?',
                'description' => "- Just be there for her, love her, talk to her, never sleep angry at her or without talking to her. Always find silly reasons to make her smile. Be her best friend ever. It is by doing this that you will have your forever with her every single day.

- Work on providing what she wants and needs physically, mentally, emotionally, and spiritually and she will want to be with nobody but you. It is pretty simple to say, much harder in practice, but that is how most things are. Make a commitment to better yourself every day and grow as person. Learn to communicate effectively and express tour needs and wants and I predict that you will be happy in any relationship with anyone in your life.

- A relationship is built on the willingness of two people to give to each other what they are able to, in order to make the relationship work out the best they can. You cannot \"control\" another person, including the one you are in a relationship with. Not many people like to be controlled, that usually push them away, rather pull them closer to you. If you have a good foundation in your relationship, then that's what you build your future on. Some of the most important \"ingredients\" are: (not necessarily in this order)

	1)   Trust
	2)   Honesty
	3)   Openness
	4)   Friendship

- A successful relationship requires falling in love with the same person many times ALWAYS with the same person.

----------------------- ONLY LOVE CAN MAKE HER STAY!!!!!!! -----------------------
",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2Fmake%20her%20stay.png?alt=media&token=e15dd637-0b3a-48a1-94c1-c154d6f59616',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '16',
                'country_code' => 'ZW',
                'title' => 'How Can I Make Him Stay?',
                'description' => "Make Sure You’re Compatible With Each Other
Mutual compatibility is the #1 most important factor in whether love will blossom, and whether a relationship will go the distance.
If you’re not compatible with each other, the relationship isn’t going to last. If you are compatible, things will work between you even when times are tough and things get hard
Be Someone That He Can Confide In
In order for him to build a deep bond with you that lasts, he has to feel like he can tell you anything. Even things that you might not want to hear.
The most important aspect to building that bond is making him feel safe when he tells you things. That means not judging him for telling you his truth about something, and it means no passive-aggressiveness or punishing him if he tells you something you don’t want to hear.
Make Sure You’re Speaking The Same ‘Love Language’
Dr. Gary Chapman pioneered a way of thinking about communication in relationships that revolutionized the way that many people look at love.
I’m not going to go through everything he’s written about, but I will give you a summary: people show love and receive love differently. If he expects to receive love in a different way than you like to show it, then he might feel like he’s not receiving any love from you.

This is a fundamental understanding – because when you realize that people like to recognize and receive love in different ways, it can show you the root of problems you might have been having in your relationships.
The other key understanding is that people like to receive love in the same way that they like to show love. That means that if he likes to show you love by giving you thoughtful gifts, he also likes to receive love by receiving thoughtful gifts.
If you try to show him love with kind words, it won’t be nearly as meaningful to him as it would be if you gave him a thoughtful gift – because you wouldn’t be speaking his love language. So try to show him love the same way that he likes to show you love – and he will feel much more loved and appreciated by you. That will kindle and strengthen his love for you in turn.

Match His Level Of Commitment To You – Don’t Chase After His Love
Many, many women make the mistake of thinking that if they just act like they’re in a serious committed relationship with a guy, he’ll wake up and want to be in a serious committed relationship with them.
Have Your Own Fulfilling Life Outside The Relationship
One huge truth about good relationships is that they can’t be everything. They have to be a part of a happy life, not the entire thing. You both need your own lives that you can enjoy even when you’re not together. Being so wrapped up in each other that you’re the only source for each other’s happiness is a recipe for codependency, drama, and a toxic relationship",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2Fmake%20him%20stay.png?alt=media&token=aaa5d9cf-b042-4667-a921-3d1859e71053',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '17',
                'country_code' => 'ZW',
                'title' => 'How Smart People Handle Toxic People',
                'description' => "1. Set Limits (Especially with Complainers)
2. Don’t Die in the Fight
3.  Rise Above: Toxic people drive you crazy because their behavior is so irrational. Make no mistake about it; their behavior truly goes against reason. So why do you allow yourself to respond to them emotionally and get sucked into the mix?
4. Stay Aware of Their Emotions
5. Establish Boundaries
6. Don’t Let Anyone Limit Their Joy
7.  Don’t Focus on Problems—Only Solutions
8. Squash Negative Self-Talk
9. Limit  Caffeine Intake
10.Get Some Sleep
11. Use Your Support System
Bringing It All Together
Before you get this system to work brilliantly, you’re going to have to pass some tests. Most of the time, you will find yourself tested by touchy interactions with problem people. Thankfully, the plasticity of the brain allows it to mold and change as you practice new behaviors, even when you fail. Implementing these healthy, stress-relieving techniques for dealing with difficult people will train your brain to handle stress more effectively and decrease the likelihood of ill effects.
",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2Fdealing%20with%20influence.png?alt=media&token=f7c4970c-6958-4cc1-984f-43f9893b394e',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '18',
                'country_code' => 'ZW',
                'title' => 'How To Deal With Heartbreaks',
                'description' => "Everyone goes through heartbreak at some point, and there is no way to avoid it. There are, however, ways to deal with heartbreak and nudge yourself in the right direction. See step 1 to start dealing with heartbreak.
Dealing with the Immediate Aftermath
Give yourself time. When you're just coming out of a situation that has caused you heartbreak (like the breakup of a relationship) you're going to need to give yourself time to grieve and to deal with all the emotions that are going to plague you in those first months.
Don't immediately throw yourself into work (or something else that consumes all your time) because you'll just keep pushing away the emotions rather than actually dealing with them and that will make it harder on you in the long run.
You are going to have lots of emotional ups and downs. Recovering from heartbreak isn't a straight line of progression upward, but rather a spiral. Just remember as you are going through the same emotional circle, that each time around you're better able to deal with the emotions from the heartbreak and that you are getting better.
Give yourself space from your ex. It's nearly impossible to get over the heartbreak of a relationship ending, but constantly being bombarded with information about your ex is definitely not going to help anything. This means no stalking on Facebook, no texting, no drunken phone calls.
Block your ex on social media so that you won't be tempted to spend hours pouring over their Facebook page and over-analyzing every single thing they post in an attempt to figure out if they regret not being with you and miss you, etc. etc.
If you're constantly trying to stay in communication with your ex you're not going to be able to move on, which will make your feelings of heartbreak and unhappiness that much harder and that much harder to bear.
Don't fight your feelings. You are going to be devastated when you encounter heartbreak. There's no way to avoid that and if you fight those feelings you're going to make it harder to deal with them in the long run.
Try journaling about how you're feeling. This is an especially good thing to do if you're bad at talking with other people about your feelings. Every day, write down how you're feeling about the heartbreak. Gradually, you'll see that you are getting better.
You don't need to pretend you're fine when you're really really not. Accept that you're going to be going through some emotional turbulence for a bit. Your friends (if they're true friends) will understand and support you.
Feel free to listen to angsty, angry, sad songs to help get those feelings out, but don't stay there. Make sure that you don't only listen to songs about heartbreak and breakups, otherwise you're going to have an even tougher time getting over it.
Make plans. While you will need time to wallow in your unhappiness, you also need to remind yourself why life is worth living. At first it will be really hard to make yourself go out and do anything, but trying to do at least one thing a week can be a good place to start.
Start small. Don't try to make yourself go out and host an entire fancy dinner right after the heartbreak. Instead, start by getting coffee or a beer with your best friend, or going to hang out at the library.
Do things that you enjoy, especially things that you weren't able to do while being part of a couple. This will remind you why you're better off without the relationship and remind you how to do things on your own.
Take care of yourself. One of the most important things to do while you're recovering from heartbreak is to take care of yourself. A lot of times you'll be feeling super unmotivated and it can be hard to simple get out of bed, but going that extra mile for yourself can help you from falling into a huge pit of despair.
Reward yourself for things that take extra effort like cleaning your apartment, going grocery shopping, even showering.
Exercising can be a good way to take care of yourself and boost your mood. Exercise releases endorphins, which can help make you feel happier and you'll feel better about yourself in general.
Coping Long-Term
Impose a daily limit on grieving. Once you've gotten over the initial shock of the heartbreak, you need to make sure that you don't spend too much time wallowing and grieving, otherwise you're never going to let yourself get over the relationship and that's what you need most of all.
Set a time each day to reflect on the break-up, usually about 20-30 minutes. Set a timer so that you know when time's up. During the day, as thoughts of the heartbreak come up, remind yourself that you have a specific time set aside and until then, you'll focus on other things.
Make sure that you have an activity that requires your attention (preferably something fun) schedule for right after, so your attention is immediately diverted.
Get a trusted friend or family member to help you out. Give yourself a certain limit when talking about the heartbreak (say 30 minutes) and when you've gone over it have your friend or family member remind you to put your focus elsewhere.
Beware of the rebound. There's nothing wrong with bolstering your confidence with an easy rebound relationship, as long as both parties know that's all it is. You're going to be in a mire of low self-confidence and vulnerability after a recent split and that's a really bad time to try to start something real with someone else.
If you're going out and partying try to moderate your drinking, both so that you don't end up drunk-calling/texting your ex and so that you don't think it's a really good idea to try to start something with someone because you're feeling down and your self-esteem is low.
Have your friends help you out. If it looks like you're coming in for a fall, have them remind you about rebounds and just make sure that's really what you want (which it can be, but you'll need to check in with yourself to make sure).
Watch how you act online. This also refers to texting and calling. You really want to make sure that you don't post tons of angry or upset things about your former relationship and you don't want to invite everyone to witness your mental breakdown over Facebook status updates.
You also want to make sure that you're not just putting things like \"can't wait for my hot date tonight\" on Facebook in the hopes that your ex or their friends will see. If you're doing that you're still in the throes of the breakup and you're still doing things for their benefit instead your own.
    The more you text/call your ex the harder it will be for you to move on, especially if they broke up with you. You'll be doing nothing more than boosting their self-esteem and lowering your own. Delete them from your phone, block them on social media, and don't ask your friends or their friends how they are.
    Remember that your end goal is to move on. The heartbreak comes from the trauma of the end of a relationship and once you've moved on from the relationship itself you'll be no longer experiencing the heartbreak. Your goal is to remember that this is something that you are capable of, even when it feels like your world has come to an end.
    You still have a future, remember. Even though it no longer involves that other person, you still have hopes and dreams and plans for what you'll be doing. You'll be grieving the loss of the dreams you were working for with the other person, but you'll need to remember that you can replace those dreams with new ones.
Repeat to yourself \"I want to be happy.\" This mantra will remind you that even though you're in the dumps because of heartbreak, you have no desire to remain there. Remind yourself that you're working towards being happy and getting over your heartbreak is part of that.
Seek help. Sometimes you can't get over something on your own and you need to seek professional assistance. There is nothing wrong with this or with you and you shouldn't feel ashamed about it. Heartbreak is painful and it stirs up a whole bubbling cauldron of feelings and emotions that can be difficult to deal with.
Learn to see the difference between regular sadness over a breakup and true depression. If it's been weeks and you're unable to get out of bed, or take care of yourself, or you simply don't care about anything, you definitely need to see a professional.",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2FHow%20To%20Deal%20With%20Heartbreaks.png?alt=media&token=a7e0dd9c-05e0-430a-80dd-febb15112606',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '19',
                'country_code' => 'ZW',
                'title' => 'How To Know If he/she Is The One?',
                'description' => "Here’s how you can know she’s the one:
- You’re sexually attracted to her, and this is something that grows with time
- You get lots of positive reinforcement
- You talk about your future together
- You willingly make sacrifices for her, and vice versa
- There is a high degree of trust
- You trust each other, because it’s earned. Jealousy kills relationships.
- You make your own rules
- You talk to each other a lot
- If she’s your favorite person to talk to, then this is a good sign.
- When you’re down, she’s the one you want
- If something is wrong and you need a shoulder to cry on, it’s not mama you run to, it’s her.
- You agree on the big things
- You help each other achieve dreams
- She makes you better
- She encourages you to have your own life
- It feels right",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2Fhow%20to%20know%20if%20she%20is%20the%20one.png?alt=media&token=f10651a8-b3df-4a70-a7a5-01456358481f',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '20',
                'country_code' => 'ZW',
                'title' => 'How old is too much of an age difference?',
                'description' => "There's a simple rule for this. Half your age plus seven is the youngest person you should be dating. So if you're 20, you shouldn't be dating someone younger than 17 which means five years is too big of a gap. If you're 30, you shouldn't be dating anyone younger than 22 so a five year gap is just fine.
There are reproductive health issues attached to dating someone who from another generation ( inter generational dating)",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2FHow%20old%20is%20too%20much%20of%20an%20age%20difference.png?alt=media&token=6b93c818-eff0-4e89-a71e-154732df3f42',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '21',
                'country_code' => 'ZW',
                'title' => 'Impact Of Gender Values & Stereotypes',
                'description' => "AT PERSONAL LEVEL

							Low Self Esteem
This affects adolescents’ decision making skills resulting in low perceptions of one’s roles, beliefs, capability and behaviour as well as ability to withstand peer pressure of the individual thinks lowly of themselves and need affirmation from their friends in order to feel good about themselves, e.g. girls may not be able to say NO to sexual advances that they are not happy with.

The 3 groups related to low self-esteem are:
		1) Those who believe and adhere to the norms.
		2) Those who do not believe but conform in order to avoid conflict.
		3) Those who do not believe. They do not behave according to the norms. They encounter isolation, stigmatisation and labels. This may result in aggressive behaviour, which may be detrimental to their health.

Susceptibility to STIs Including HIV and unintended pregnancies
	- Inability to negotiate safer sex predisposes young people to STIs including HIV and unintended pregnancies.
	- Discussing sexual issues across sexes is taboo. Therefore, this limits the chance of negotiations with sexual partners and also limits access to information, constructive advice and parental guidance for both sexes.

The concept of risk taking for males predisposes them to STI/HIV as they try to fulfil the expectations of society e.g., multiple sexual partners, unprotected sex, a real man should have several children. The submissive, non-questioning role ascribed to women and girls also places them at risk as unequal partners in relationships. Their economic dependence also makes them vulnerable to exploitation and transactional sex among other things.

		- The socialization of sexual intercourse is that it must be unprotected and penetrative.
		- Sex must be initiated by a male to a resisting partner.  Males are expected to struggle to get sexual intercourse (thus setting the scene for accepting sexual violence), females are expected to resist.  The sexual act leaves no room for healthy communication, negotiated protection and mutual respect. The socialization that females will always resist to seem acceptable, especially in relationships. This leaves no room for communication, negotiated protection and mutual respect.

						Sexual Drive and Enjoyment
Males are expected to have a high sexual drive which is uncontrollable. Adolescents may be put under the social “pressure” and engage in risky sexual behaviours to “prove” that they are men enough.
Sexual gratification is perceived as only important for males, e.g. dry sex, harmful herbs and ointments are introduced in the sexual activity.  Dry penetration (which reduces prospects of condom use and effectiveness) may cause bruises which may further increase the chances of STI transmission and cancers of the reproductive system.

AT SOCIETAL LEVEL
	- Denial of women to access and control of their own lives, bodies and economic resources (discrimination  against women)
	- Relegation of women to the domestic sphere, subordination to men, marginalisation and resistance to change
	- Lack of participation of women in development

Violation of Women's Sexual and Reproductive Rights some of which are:
	- Right to life
	- Right to bodily integration and security of the person
	- Right to privacy
	- Right to benefits of scientific progress
	- Right to seek, receive & impart information
	- Right to education
	- Right to health
Right to equality in marriage and divorce",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2Fgender%20values%20and%20stereootypes.png?alt=media&token=d028347a-1ef6-41c6-9daa-e18d312643c8',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '22',
                'country_code' => 'ZW',
                'title' => 'Impact Of Socialisation On Gender',
                'description' => "Growing up, what kind of toys did you play with? If you are a boy, did you play with trucks, action figures, toy weapons, or sports equipment? If you were a girl, did you play dress-up, play with dolls, or pretend kitchen sets? If you said yes to any of the examples, there is nothing wrong with that, but if you feel that those are the only types of things boys or girls should play with, it is most likely because you have been taught that that was the acceptable thing to believe.
As we grow, we learn how to behave from those around us. At a very early age, children are introduced to certain roles that are typically linked to their biological sex. The term gender role refers to society's concept of how men and women are expected to act and how they should behave. These roles are based on norms, or standards, created by society. In African culture, masculine roles are usually associated with strength, aggression, and dominance, while feminine roles are usually associated with passivity, nurturing, and subordination. Role learning starts with socialization at birth. Even today, our society is quick to outfit male infants in blue and girls in pink, even applying these color-coded gender labels while a baby is in the womb.
And when we think back to the toys that we played with growing up, we also learned certain gender roles. The types of toys that we mentioned that parents give their daughters often teach them that their role is to be nurturing or delicate and that the role playing they engage in is to take care of others or may be too fanciful to be useful in real life, like being a princess. Meanwhile, the types of toys that parents give their sons, like trucks, toy guns, and superhero paraphernalia, are meant to promote motor skills, aggression, and solitary play.
Furthermore, playing with things that promote aggression often leads to us hearing the phrase that 'boys will be boys,' which is often used to justify behavior such as pushing, shoving, or other forms of aggression. The phrase implies that such behavior is unchangeable and something that is part of a boy's nature, and boys and men accept that behavior because it meshes with the cultural script for masculinity. The 'script' written by society is in some ways similar to a script written by a playwright. Just as a playwright expects actors to adhere to a prescribed script, society expects women and men to behave according to the expectations of their respective gender role. Scripts are generally learned through a process known as socialization, which teaches people to behave according to social norms.
Agents of Socialization
We've already said that children learn at a young age that there are distinct expectations for boys and girls and that one of the earliest ways that they learn gender roles is through play. And as children get older, gender roles continue to be reinforced by different groups. We call the groups that promote or enforce social norms and roles agents of socialization. Gender socialization occurs through four major agents of socialization: family, education, peer groups, and mass media. Each agent reinforces gender roles by creating and maintaining expectations for gender-specific behavior.
Family is the first and most influential agent of socialization. The gender roles that a child learns here set the tone for the child later on through life and make it increasingly difficult for a child to later change their thought process. There is considerable evidence that parents socialize sons and daughters differently. For instance, boys are allowed more freedom and independence at an earlier age than daughters. They may be given fewer restrictions on appropriate clothing, dating habits, or curfew. Sons may also be free from performing domestic duties, such as cleaning or cooking and other household tasks that are considered feminine. Daughters, on the other hand, may be limited by their expectation to be passive and nurturing, generally obedient, and to assume many of the household responsibilities.",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2Fimpact%20of%20socialisation.png?alt=media&token=61fcb437-d8df-4587-8301-19dcef48bbed',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '23',
                'country_code' => 'ZW',
                'title' => 'Kinds of Relationships',
                'description' => "There are many different relationships that young people may explore. Dating is one type of relationship.  It is different from courtship in that dating involves a couple socializing while in courtship the couple is preparing for marriage.
Family: Relationships amongst relatives and family members

Friendships: Relationships with the same or opposite sex.

Dating: Socializing (either in groups, or as couples) with members of the opposite sex or same sex.

Courtship: To win affections or love of the opposite sex in preparation for marriage.

Activities within these Relationships
Different kinds of activities take place in different types of relationships.

Relationship: Dating

Activity: Engaging in sexual intercourse

Possible Consequences:
	- Pregnancy or contracting a sexually transmitted infection
	- Being chased away from home
	- Losing respect; being mistrusted

Possible Strategies:
	- Going to open, as opposed to private, places
	- Playing games and other activities as groups
	- Developing life-skills
	- Respecting each other’s feelings
	- Use of condoms and other contraceptives (dual protection)

Note: All relationships including sexual relationships should be based on consent as without consent one will be ignoring other people’s right to choose and this result in abuse.
",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2Fkinds%20of%20relationships.jpg?alt=media&token=cb650b2d-2832-45e9-8e40-9e370269353b',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '24',
                'country_code' => 'ZW',
                'title' => 'Stress Management',
                'description' => "Stress is the body's reaction to a change that requires a physical, mental or emotional adjustment or response. Simply put, stress is any outside force or event that has an effect on our body or mind. Stress can come from any situation or thought that makes you feel frustrated, angry, nervous, or anxious.

There are pre-disposing factors that may lead to stress, such as:
- Emotional/personal problems
- Traumatic experiences (violence, rape, abuse)
- Death of a family member or friend
- Economic hardships e.g. lack of money
- New environments or situations, changes in places of work, living situation, family situation
- Unemployment

SIGNS AND SYMPTOMS
Stress may manifest itself in either or both physical and emotional signs.

 Physical:
	- Excessive drug and alcohol abuse
	- Fatigue
	- Weight loss/gain
	- Sleeplessness/insomnia
	- Change in appetite
	- Skin problems (rash, pimples, acne)
	- Loss of libido
	- Impotence

Emotional:
	- Mood swing
	- Isolation or loneliness
	- Depression
	- Change in normal patterns of behaviour
	- Anger or aggressiveness
	- Irritability
	- Sudden poor school performance

STRESS MANAGEMENT

Strategies and techniques to help reduce stress:
Psychotherapy
	- Provision for sharing stress inducing situation.
	- Communication (i.e. sharing problems with someone you trust—a relative, counsellor or friend)
	- Recognizing those things that are really important and those that are not
	- Child/parent counselling
	- Praying and meditation
	- Religious singing
	- Positive self-talk
	- Accepting reality
	- Recognizing what you can control and what is not in your control
	- Positive socialization (i.e. joining a youth club)

Diversional Therapy
	- Engaging the mind away from stressful situations.
	- Sports (i.e. jogging)
	- Hobbies
	- Change of environment

Others
	- Proper rest
	- Deep breathing
	- Relaxation exercises
	- Being more organized
	- Sports (i.e. jogging)
	- Hobbies
	- Positive socialization (i.e. joining a youth club)
	- Change of environment
	- Communication (i.e. sharing problems with someone you trust—a relative, counsellor or friend)

COMPLICATIONS OF STRESS

Complications of stress include: High Blood Pressure; stroke; death; suicide; disposition to violent behaviour; depression; psychosis; neurosis and strained relationships.

The role of the service provider is to:
	- educate youth on dangers of stress
	- counsel and refer youth appropriately
	- help youth cope with stressful situations
	- manage personal stress and ensure it does not come in the way of service provision, particularly to young people



",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2Fstress.png?alt=media&token=2ef6b08e-6a15-453b-907f-207ef02ca681',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '25',
                'country_code' => 'ZW',
                'title' => 'What Are the Different Types of Dating Abuse?',
                'description' => "Dating abuse is a pattern of behaviors one person uses to gain and maintain power and control over their partner. Many people assume abuse means that physical violence is happening, but that’s not always the case! Abuse comes in many forms — it’s not just physical. Experiencing even one or two of these warning signs in a relationship is a red flag that abuse may be present. Remember, each type of abuse is serious and no one deserves to experience abuse of any kin
· Physical abuse is any intentional and unwanted contact with you or something close to your body. Sometimes abusive behavior does not cause pain or even leave a bruise, but it’s still unhealthy.
Escaping Physical Abuse
Start by learning that you are not alone. More than one in 10 high school students have already experienced some form of physical aggression from a dating partner, and many of these teens did not know what to do when it happened. If you are in a similar situation:
· Realize this behavior is wrong.
· Talk to an adult, friend or family member that you trust.
· Create a safety plan.
· Consider getting a restraining order.
· Do not accept or make excuses for your partner’s abusive behavior
· Remember that physical abuse is never your fault.
Protecting Yourself from Physical Abuse
Unhealthy or abusive relationships usually get worse. It is important to know the warning signs to prevent more serious harm. If you are in an unhealthy or abusive relationship, consider making a safety plan. Chat with a peer advocate for more information. (call 393)


If you recognize any of these warning signs in your own relationship, you can always call, chat or text with the youth helpline (393) we offer help for the following:
· Physical Abuse
· Emotional/Verbal Abuse
Emotional abuse includes non-physical behaviors such as threats, insults, constant monitoring or “checking in,” excessive texting, humiliation, intimidation, isolation or stalking.
There are many behaviors that qualify as emotional or verbal abuse, including:
· Calling you names and putting you down.
· Yelling and screaming at you.
· Intentionally embarrassing you in public.
· Preventing you from seeing or talking with friends and family.
· Telling you what to do and wear.
· Damaging your property when they’re angry (throwing objects, punching walls, kicking doors, etc.)
· Using online communities or cell phones to control, intimidate or humiliate you.
· Blaming your actions for their abusive or unhealthy behavior.
· Accusing you of cheating and often being jealous of your outside relationships.
· Stalking you.
· Threatening to commit suicide to keep you from breaking up with them.
· Threatening to harm you, your pet or people you care about.
· Using gaslighting techniques to confuse or manipulate you.
· Making you feel guilty or immature when you don’t consent to sexual activity.
· Threatening to expose your secrets such as your sexual orientation or immigration status.
· Starting rumors about you.
· Threatening to have your children taken away.
Is Emotional Abuse Really Abuse?
A relationship can be unhealthy or abusive even without physical violence. Verbal abuse may not cause physical damage, but it does cause emotional pain and scarring. It can also lead to physical violence if the relationship continues on an unhealthy path. Learn more about how to recognize emotional abuse by checking out our Power and Control Wheel.
Sometimes verbal abuse is so bad that you actually start believing what your partner says. You begin to think you’re stupid, ugly or worthless. You agree that nobody else would ever want to be in a relationship with you. Constantly being criticized and told you aren’t good enough causes you to lose confidence and lowers your self-esteem. As a result, you may start to blame yourself for your partner’s abusive behavior.
Remember: emotional abuse is never your fault. In fact, your partner may just be trying to control or manipulate you into staying in the relationship. Talk to someone you trust, like a parent, friend or teacher, about the situation and make a safety plan. You can also chat with a peer advocate for more help when dealing with verbal abuse.

Sexual abuse refers to any action that pressures or coerces someone to do something sexually they don’t want to do. It can also refer to behavior that impacts a person’s ability to control their sexual activity or the circumstances in which sexual activity occurs, including oral sex, rape or restricting access to birth control and condoms.
It is important to know that just because the victim “didn’t say no,” doesn’t mean that they meant “yes.” When someone does not resist an unwanted sexual advance, it doesn’t mean that they consented. Sometimes physically resisting can put a victim at a bigger risk for further physical or sexual abuse.
Some think that if the victim didn’t resist, that it doesn’t count as abuse. That’s not true. This myth is hurtful because it makes it more difficult for the victim to speak out and more likely that they will blame themselves. Whether they were intoxicated or felt pressured, intimidated or obligated to act a certain way, sexual assault/abuse is never the victim’s fault.
Some examples of sexual assault and abuse include:
· Unwanted kissing or touching.
· Unwanted rough or violent sexual activity.
· Rape or attempted rape.
· Refusing to use condoms or restricting someone’s access to birth control.
· Keeping someone from protecting themselves from sexually transmitted infections (STIs).
· Sexual contact with someone who is very drunk, drugged, unconscious or otherwise unable to give a clear and informed “yes” or “no.”
· Threatening someone into unwanted sexual activity.
· Pressuring or forcing someone to have sex or perform sexual acts.
· Using sexual insults toward someone.
Keep in Mind
· Everyone has the right to decide what they do or don’t want to do sexually. Not all sexual assaults are violent “attacks.”
· Most victims of sexual assault know the assailant.
· People of all genders can be victims of sexual abuse.
· People of all genders can be perpetrators of sexual abuse.
· Sexual abuse can occur in same-sex and opposite-sex relationships
· Sexual abuse can occur between two people who have been sexual with each other before, including people who are married or dating.
· Sexual activity in a relationship should be fun! Get our tips for navigating sex and healthy relationships.
What to Do
If you have been sexually assaulted, first try to get to a safe place away from the attacker. You may be scared, angry and confused, but remember the abuse was in no way your fault. You have options. You can:
· Contact Someone You Trust. Many people feel fear, guilt, anger, shame and/or shock after they have been sexually assaulted. Having someone there to support you as you deal with these emotions can make a big difference. It may be helpful to speak with a counselor, someone at a sexual assault hotline or a support group. Get more tips for building a support system.
· Report What Happened to the Police. If you do decide to report what happened, you will have a stronger case if you do not alter or destroy any evidence. This means don’t shower, wash your hair or body, comb your hair or change your clothes, even if that is hard to do. If you are nervous about going to the police station, it may help to bring a friend with you. There may also be sexual assault advocates in your area who can assist you and answer your questions.
· Go to an Emergency Room or Health Clinic. It is very important for you to seek health care as soon as you can after being assaulted. You will be treated for any injuries and offered medications to help prevent pregnancy and/or STIs.
Remember there is always help. For more information or to find out about available resources in your area, chat with a helpline counselor

Financial abuse can be very subtle. It can include telling you what you can and cannot buy or requiring you to share control of your bank accounts. At no point does someone you are dating have the right to use money or how you spend it to control you.
Here are some examples of financially abusive behaviors:
· Giving you an allowance and closely watching what you buy.
· Placing your paycheck in their account and denying you access to it.
· Keeping you from seeing shared bank accounts or records.
· Forbidding you to work or limiting the hours you do.
· Preventing you from going to work by taking your car or keys.
· Getting you fired by harassing you, your employer or coworkers on the job.
· Hiding or stealing your student financial aid check or outside financial support.
· Using your social security number to obtain bad credit loans without your permission.
· Using your child’s social security number to claim an income tax refund without your permission.
· Maxing out your credit cards without your permission.
· Refusing to give you money, food, rent, medicine or clothing.
· Using funds from your children’s tuition or a joint savings account without your knowledge.
· Spending money on themselves but not allowing you to do the same.
· Giving you presents and/or paying for things like dinner and expecting you to somehow return the favor.
· Using their money to hold power over you because they know you are not in the same financial situation as they are.
Am I Experiencing Financial Abuse
If your partner does any of these things, you may be in an unhealthy or abusive relationship. Financial abuse is usually coupled with emotional or physical abuse.
If you are not in control over your finances, or if your partner has removed money from your bank account, it can seem very scary to leave an abusive relationship. There are many organizations who can help you “get back on your feet” and get control over your finances; some even provide short-term loans to cover important expenses as you escape an abusive relationship. Chat with a peer advocate to learn more about local resources.
You may also want to talk to someone you trust, like a friend, family member or legal professional, about getting a protection order. Whether you decide to leave or stay, consider making a safety plan that includes setting aside funds in a secret location.

Digital dating abuse is the use of technologies such as texting and social networking to bully, harass, stalk or intimidate a partner. Often this behavior is a form of verbal or emotional abuse perpetrated online.
In a healthy relationship, all communication is respectful whether in person, online or by phone. It is never okay for someone to do or say anything that makes you feel bad, lowers your self-esteem or manipulates you. You may be experiencing digital abuse if your partner:
· Tells you who you can or can’t be friends with on Facebook and other sites.
· Sends you negative, insulting or even threatening emails, Facebook messages, tweets, DMs or other messages online.
· Uses sites like Facebook, Twitter, foursquare and others to keep constant tabs on you.
· Puts you down in their status updates.
· Sends you unwanted, explicit pictures and/or demands you send some in return.
· Pressures you to send explicit video or sexts.
· Steals or insists on being given your passwords.
· Constantly texts you and makes you feel like you can’t be separated from your phone for fear that you will be punished.
· Looks through your phone frequently, checks up on your pictures, texts and outgoing calls.
· Tags you unkindly in pictures on Instagram, Tumblr, etc.
· Uses any kind of technology (such as spyware or GPS in a car or on a phone) to monitor you
You never deserve to be mistreated, online or off. If you’re experiencing digital dating abuse, we encourage you to chat with a peer advocate. Remember:
· Your partner should respect your relationship boundaries.
· It is okay to turn off your phone. You have the right to be alone and spend time with friends and family without your partner getting angry.
· You do not have to text any pictures or statements that you are uncomfortable sending, especially nude or partially nude photos, known as “sexting.”
· You lose control of any electronic message once your partner receives it. They may forward it, so don’t send anything you fear could be seen by others.
· You do not have to share your passwords with anyone.
· Know your privacy settings. Social networks such as Facebook allow the user to control how their information is shared and who has access to it. These are often customizable and are found in the privacy section of the site. Remember, registering for some applications (apps) requires you to change your privacy settings.
· Be mindful when using check-ins like Facebook Places and foursquare. Letting an abusive partner know where you are could be dangerous. Also, always ask your friends if it’s okay for you to check them in. You never know if they are trying to keep their location secret.
",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2Ftypes%20of%20date%20abuse.png?alt=media&token=cf14bcd8-d0bb-49f3-b80a-3494567fdccd',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '26',
                'country_code' => 'ZW',
                'title' => 'What if I’m Being Stalked?',
                'description' => "What if I’m Being Stalked?
If you’re being stalked, you may be feeling stressed, vulnerable or anxious. You may also have trouble sleeping or concentrating at work or school. Remember, you are not alone. Every year in the United States, 3.4 million people are stalked and youth between the ages of 18-24 experience the highest rates. Most people assume that stalkers are strangers, but actually, three in four victims are harassed by someone they know.
If you are in immediate danger, call 911 and report everything that’s happened to the police. Get additional support by obtaining a protection order that makes it illegal for the stalker to come near. Know that the person harassing you may also get arrested and convicted in the criminal justice system.
Remember to save important evidence such as:
					- Text messages				- Voicemails
- Videos
- Letters, photos and cards
- Unwanted items or gifts
- Social media friend requests
- Emails

You should also write down the times, places and dates all incidents occurred. Include the names and contact information of people who witnessed what happened.
Stalking is traumatic. You may experience nightmares, lose sleep, get depressed or feel like you’re no longer in control of your life. These reactions are normal. It can help to tell your friends and family about the stalking and develop a safety plan. You can also chat with a peer advocate for support.
also remember to call the Youth helpline on 393",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2Fstalked.png?alt=media&token=288ab1d9-48c4-49f3-bde7-4a5e7ffd01db',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => '27',
                'country_code' => 'ZW',
                'title' => 'When Is The Right Time To Start Dating?',
                'description' => "Asking Yourself if You’re Ready
Ask yourself why you want a boyfriend. Whatever your age, knowing why you want something, like a boyfriend, is a good place to start. You don’t want to jump into a relationship or say yes to dating a guy without thinking or just because you think it might be fun. Relationships take maturity and work so it’s best to first think about what you’re getting into.
There are good reasons and bad reasons for wanting a boyfriend.
Companionship and a partner to share life with are good reasons for wanting to seriously date one specific person.
If you feel unhappy or incomplete, keep in mind that a person can’t fulfill that for you.
Boyfriends can be a temporary cure for boredom or loneliness, but expecting them to be perfect and always there for you is not realistic since they are imperfect, just like you.
Define what dating means to you. If you want to one day settle down and marry someone special, then having a boyfriend is a good way to learn about being in a serious, committed relationship. But if you just want to have fun getting to know a bunch of guys, then being exclusive with a boy may not be the best idea.
Things to consider before you decide you need a Boyfriend
- Determine what your personal goals and dreams are.
- Remember that you have time to figure things out.
- Don’t let anyone guilt you into thinking you have to have a boyfriend.
- Be honest with yourself about your feelings.

Seeking Advice from Others
Talk to your parents for their opinion or rules. Before you decide completely about having a boyfriend, ask your parents about their rules for you about dating. They might suggest you wait until you’re in high school, even after graduating high school. You might not be able to decide if you can have a boyfriend right now if they want you to focus on school or other things.
Ask your friends for advice but don’t give into peer pressure. It can be easy to get caught up in the thrill of dating and hearing about your friends' boyfriends and want one yourself. Just keep in mind that just because everyone is doing something, doesn't mean it's the best idea.
Just make sure that whatever you decide, you make the decision for yourself and not for your friends.
Listen to older couples about their dating experiences.
Considering Your Cultural or Religious Background
Your religion or culture might have specific opinions on things like sex or birth control. While it may sound fun to rock the boat and do something rebellious, keep in mind that the rules you know might be in place to keep you safe.
Remember, you are your own person and can have your own ideas and opinions.
However, it may be in your best interest to respect the rules and culture around you.
Whether you choose to go along with what everyone around you is doing or go off on your own about having a boyfriend, keep in mind that your choices will still impact others.
It may seem fun to be rebellious or edgy, but having a boyfriend for the sake of breaking rules or making a point is unhealthy.
",
                'imageUrl' => 'https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/dating%2Fright%20time%20to%20date.png?alt=media&token=b1e72a1e-ae0e-4335-bce1-bcbcb71b90f3',
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // Category: Drug Use & Abuse
            [
                'id' => 28,
                'country_code' => 'ZW',
                'title' => "Consequences Of Substance Abuse ",
                'description' => "1 Health risks
Engaging in unprotected sex
Unintended pregnancies
Susceptibility to STI/HIV
Mental illness
Disability
Suicide
Death

2 Social risks
Being ostracized by family & friends
Loss of social acceptance,Stigmatization
Dependence on substance
Loss of self esteem
Changes in appearance
dependency

3 Criminal tendencies
Violence
Rape
Theft

4 Economic risks
Loss of income or employment
Dependence on others",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/drug_use_abuse%2FConsequences%20Of%20Substance%20Abuse%20.png?alt=media&token=4e5823d7-d528-418b-94a8-b74b5037dcaf",
                'category_id' => 3,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 29,
                'country_code' => 'ZW',
                'title' => "Drug Use & Dependence",
                'description' => "Drug abuse refers to an individual who continues to use drugs even though they know it is having an adverse affect on their health and well being. Drug abusers will continue to use even though their social life is falling apart and their financial stability is collapsing.

Drug dependence occurs when an individual has built up a tolerance to a particular drug or drugs. With tolerance comes the need to take more and more of the drug in order to achieve a “high”. Those with a drug dependence problem are also likely to experience withdrawal symptoms when they stop taking the drug in question. To help better identify drug abuse and dependence, it is important to understand the medical criteria for each.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/drug_use_abuse%2FDrug%20Use%20%26%20Abuse%20.png?alt=media&token=80da9263-9c19-4307-bea7-06b38530d724",
                'category_id' => 3,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 30,
                'country_code' => 'ZW',
                'title' => "How To Help A Friend Or A Family Member Who Is An Addict",
                'description' => "If you think that someone is addicted to drugs, it is important to handle the situation carefully.

Helping a friend is important, however, doing so is not easy and it's a path on which you have to be careful not to tread on.

Have open communication :Before you talk to them about treatment, you could encourage them to engage themselves in positive socialisation like joining youth clubs.



Encourage them to read informative and educational articles on the dangers of drugs and substance abuse.



Encourage them to engage in diversion therapy, for example ,engaging the mind away from stressful situations, by engaging in sports ,hobbies or literally changing the environment and if the problem persists, refer them to a professional for counselling.





 ",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/drug_use_abuse%2FHow%20To%20Help%20A%20Friend%20Or%20A%20Family%20Member%20Who%20Is%20An%20Addict%20.png?alt=media&token=203cdf96-2118-4786-8ab6-d3a60561e8c9",
                'category_id' => 3,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 31,
                'country_code' => 'ZW',
                'title' => "Ways To Help Adolescents Avoid Drug And Alcohol Abuse",
                'description' => "Keeping one-self busy through:
1. Recreational activities e.g. sports, hobbies, clubs and reading
2. Income-generating projects
3. Self-Empowerment
4. Making adolescents aware of the need to have self-esteem (avoid negative peer pressure; remain in control; and set life goals and work towards achieving them).
Support systems for Adolescents who have abused drugs and alcohol:
Youth friendly centre/ corners;
Alcoholic Anonymous;
Bread of Life;
Good Samaritans;
Religious Organisations;
Victim friendly Unit;
Health Centres;
Family;
Social Services.
Send A CALL E BACK 0 777 469 107  FOR MORE INFORMATION or DIAL 393",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/drug_use_abuse%2FWays%20To%20Help%20Adolescents%20Avoid%20Drug%20And%20Alcohol%20Abuse%20.png?alt=media&token=ed08d0ae-88df-4ec7-aa92-d3dc65fe796b",
                'category_id' => 3,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 32,
                'country_code' => 'ZW',
                'title' => "I want to stop using Drugs But I don’t Know How?",
                'description' => "Overcoming Drug Addiction

How to Stop Abusing Drugs, Find Treatment, and Begin Recovery

Developing a drug addiction isn’t a character flaw or a sign of weakness and it takes more than willpower to overcome the problem. Abusing illegal or certain prescription drugs can create changes in the brain, causing powerful cravings and a compulsion to use that make sobriety seem like an impossible goal. But recovery is never out of reach, no matter how hopeless your situation seems. With the right treatment and support, change is possible. Don’t give up—even if you’ve tried and failed before. The road to recovery often involves bumps, pitfalls, and setbacks. But by examining the problem and thinking about change, you’re already well on your way.

Overcoming drug addiction: Decide to make a change

For many people struggling with addiction, the toughest step toward recovery is the very first one: recognizing that you have a problem and deciding to make a change. It’s normal to feel uncertain about whether you’re ready to make a change, or if you have what it takes to quit. If you’re addicted to a prescription drug, you may be concerned about how you’re going to find an alternate way to treat a medical condition. It’s okay to feel torn. Committing to sobriety involves changing many things, including:

the way you deal with stress

who you allow in your life

what you do in your free time

how you think about yourself

the prescription and over-the-counter medications you take

It’s also normal to feel conflicted about giving up your drug of choice, even when you know it’s causing problems in your life. Recovery requires time, motivation, and support, but by making a commitment to change, you can overcome your addiction and regain control of your life.

Overcoming addiction step 1: Think about change

Keep track of your drug use, including when and how much you use. This will give you a better sense of the role the addiction is playing in your life.

List the pros and cons of quitting, as well as the costs and benefits of continuing your drug use.

Consider the things that are important to you, such as your partner, your kids, your pets, your career, or your health. How does your drug use affect those things?

Ask someone you trust about their feelings on your drug use.

Ask yourself if there’s anything preventing you from changing. What could help you make the change?

Preparing for change: 5 key steps to addiction recovery

Remind yourself of the reasons you want to change.

Think about your past attempts at recovery, if any. What worked? What didn’t?

Set specific, measurable goals, such as a start date or limits on your drug use.

Remove reminders of your addiction from your home, workplace, and other places you frequent.

Tell friends and family that you’re committing to recovery, and ask for their support.

Explore your addiction treatment options

Once you’ve committed to recovery, it’s time to explore your treatment choices. While addiction treatment can vary according to the specific drug, a successful program often includes different elements, such as:

Detoxification. Usually the first step is to purge your body of drugs and manage withdrawal symptoms.

Behavioral counseling. Individual, group, and/or family therapy can help you identify the root causes of your drug use, repair your relationships, and learn healthier coping skills.

Medication may be used to manage withdrawal symptoms, prevent relapse, or treat any co-occurring mental health condition such as depression or anxiety.

Long-term follow-up can help to prevent relapse and maintain sobriety. This may include attending regular in-person support groups or online meetings to help keep your recovery on track.

Types of drug treatment programs

Residential treatment – Residential treatment involves living at a facility and getting away from work, school, family, friends, and addiction triggers while undergoing intensive treatment. Residential treatment can last from a few days to several months.

Day treatment/Partial hospitalization – Partial hospitalization is for people who require ongoing medical monitoring but wish to still live at home and have a stable living environment. These treatment programs usually meet at a treatment center for 7 to 8 hours during the day, then you return home at night.

Outpatient treatment – Not a live-in treatment program, these outpatient programs can be scheduled around work or school. You’re treated during the day or evening but don’t stay overnight. The major focus is relapse prevention.

Sober living communities – Living in a sober house normally follows an intensive treatment program such as residential treatment. You live with other recovering addicts in a safe, supportive, and drug-free environment. Sober living facilities are useful if you have nowhere to go or you’re worried that returning home too soon will lead to relapse.

As you consider the options, keep in mind:

No treatment works for everyone. Everyone’s needs are different. Whether you have a problem with illegal or prescription drugs, addiction treatment should be customized to your unique situation. It’s important that you find a program that feels right.

Treatment should address more than just your drug abuse. Addiction affects your whole life, including your relationships, career, health, and psychological well-being. Treatment success depends on developing a new way of living and addressing the reasons why you turned to drugs in the first place. For example, your drug dependency may have developed from from a desire to manage pain or to cope with stress, in which case you’ll need to find a healthier way to relieve pain or to handle stressful situations.

Commitment and follow-through are key. Drug addiction treatment is not a quick and easy process. In general, the longer and more intense the drug use, the longer and more intense the treatment you’ll need. And in all cases, long-term follow-up care is crucial to recovery.

There are many places to turn for help. Not everybody requires medically supervised detox or an extended stint in rehab. The care you need depends on a variety of factors, including your age, drug-use history, medical or psychiatric conditions. In addition to doctors and psychologists, many clergy members, social workers, and counselors offer addiction treatment services.

As you seek help for drug addiction, it’s also important to get treatment for any other medical or psychological issues you’re experiencing. Your best chance of recovery is through integrated treatment. This means getting combined mental health and addiction treatment from the same treatment provider or team.

Find support for your addiction recovery

Don’t try to go it alone—reach out for support. Whatever treatment approach you choose, having positive influences and a solid support system is essential. The more people you can turn to for encouragement, guidance, and a listening ear, the better your chances for recovery.

Lean on close friends and family. Having the support of friends and family members is an invaluable asset in recovery. If you’re reluctant to turn to your loved ones because you’ve let them down before, consider going to relationship counseling or family therapy.

Build a sober social network. If your previous social life revolved around drugs, you may need to make some new connections. It’s important to have sober friends who will support your recovery. Try taking a class, joining a church or a civic group, volunteering, or attending events in your community.

Consider moving into a sober living home. Sober living homes provide a safe, supportive place to live while you’re recovering from drug addiction. They are a good option if you don’t have a stable home or a drug-free living environment.

Make meetings a priority. Join a recovery support group such as a 12-step program and attend meetings regularly. Spending time with people who understand exactly what you’re going through can be very healing. You can also benefit from the shared experiences of the group members and learn what others have done to stay sober.

Learn healthy ways to cope with stress

After addressing your immediate problems with addiction and starting treatment, you’ll still have to face the problems that led to your drug abuse. Did you start using to numb painful emotions, calm yourself after an argument, unwind after a bad day, or forget about your problems? Once you’re sober, the negative feelings that you dampened with drugs will resurface. For treatment to be successful, you’ll first need to resolve your underlying issues.

Once you have resolved your underlying issues, you will, at times, continue to experience stress, loneliness, frustration, anger, shame, anxiety, and hopelessness. These emotions are all a normal part of life. Finding ways to address these feelings as they arise is an essential component to your treatment and recovery.

Relieving stress without drugs

Drug abuse often stems from misguided attempts to manage stress. Many people turn to alcohol or drugs to unwind and relax after a stressful event, or to cover up painful memories and emotions, but there are healthier ways to keep your stress level in check. You can learn to manage your problems without falling back on your addiction. When you’re confident in your ability to quickly de-stress, facing strong feelings isn’t as intimidating or overwhelming. Different quick stress relief strategies work better for some people than others. The key is to find the one that works best for you.

Movement. A brisk walk around the block can be enough to relieve stress. Yoga and meditation are also excellent ways to bust stress and find balance.

Step outside and savor the warm sun and fresh air. Enjoy a beautiful view or landscape.

Play with your dog or cat. Enjoy the relaxing touch of your pet’s fur.

Experiment with your sense of smell. Breathe in the scent of fresh flowers or coffee beans, or savor a scent that reminds you of a favorite vacation, such as sunscreen or a seashell.

Close your eyes and picture a peaceful place. Think of a sandy beach, or a fond memory, such as your child’s first steps or time spent with friends.

Pamper yourself. Make yourself a steaming cup of tea, give yourself a neck or shoulder massage. Soak in a hot bath or shower.

Keep drug triggers and cravings in check

Your recovery doesn’t end at getting sober. Your brain still needs time to recover and rebuild connections that changed while you were addicted. During this rebuild, drug cravings can be intense. You can support your continued recovery by avoiding people, places, and situations that trigger your urge to use:

Step away from your friends who use. Don’t hang out with friends who are still doing drugs. Surround yourself with people who support your sobriety, not those who tempt you to slip back into old, destructive habits.

Avoid bars and clubs. Even if you don’t have a problem with alcohol, drinking lowers inhibitions and impairs judgment, which can easily lead to a relapse. Drugs are often readily available and the temptation to use can be overpowering. Also avoid any other environments and situations that you associate with drug use.

Be upfront about your history of drug use when seeking medical treatment. If you need a medical or dental procedure done, be upfront and find a provider who will work with you in either prescribing alternatives or the absolute minimum medication necessary. You should never feel ashamed or humiliated about previous drug use or be denied medication for pain; if that happens, find another provider.

Use caution with prescription drugs. If you were addicted to a prescription drug, such as an opioid painkiller, you may need to talk to your doctor about finding alternate ways to manage pain. Regardless of the drug you experienced problems with, it’s important to stay away from prescription drugs with the potential for abuse or use only when necessary and with extreme caution. Drugs with a high abuse potential include painkillers, sleeping pills, and anti-anxiety medication.

Coping with drug cravings

Sometimes craving cannot be avoided, and it is necessary to find a way to cope:

Get involved in a distracting activity. Read, see friends, go to a movie, immerse yourself in a hobby, hike, or exercise. Once you’re interested in something else, you’ll find the urges go away.

Talk it through. Talk to friends or family members about craving when it occurs. Talking can be very helpful in pinpointing the source of the craving. Also, talking about craving often helps to discharge and relieve the feeling and will help restore honesty in your relationship. Craving is nothing to feel bad about.

Challenge and change your thoughts. When experiencing a craving, many people have a tendency to remember only the positive effects of the drug and forget the negative consequences. Therefore, you may find it helpful to remind yourself that you really won’t feel better if you use and that you stand to lose a lot. Sometimes it is helpful to have these consequences listed on a small card that you keep with you.

Urge surf. Many people try to cope with their urges by toughing it out. But some cravings are too strong to ignore. When this happens, it can be useful to stay with the urge until it passes. This technique is called urge surfing. Imagine yourself as a surfer who will ride the wave of your drug craving, staying on top of it until it crests, breaks, and turns into less powerful, foamy surf. When you ride out the craving, without trying to battle, judge, or ignore it, you’ll see that it passes more quickly than you’d think.

The three basic steps of urge surfing:

Take an inventory of how you experience the craving. Do this by sitting in a comfortable chair with your feet flat on the floor and your hands in a comfortable position. Take a few deep breaths and focus your attention inward. Allow your attention to wander through your body. Notice where in your body you experience the craving and what the sensations are like. Notice each area where you experience the urge, and tell yourself what you are experiencing. For example, “My craving is in my mouth and nose and in my stomach.”

Focus on one area where you are experiencing the urge. Notice the exact sensations in that area. For example, do you feel hot, cold, tingly, or numb? Are your muscles tense or relaxed? How large an area is involved? Notice the sensations and describe them to yourself. Notice the changes that occur in the sensation. “My mouth feels dry and parched. There is tension in my lips and tongue. I keep swallowing. As I exhale, I can imagine the tingle of using.”

Repeat the focusing with each part of your body that experiences the craving. Describe to yourself the changes that occur in the sensations. Notice how the urge comes and goes. Many people, when they urge surf, notice that after a few minutes the craving has vanished. The purpose of this exercise, however, is not to make the craving go away but to experience the craving in a new way. If you practice urge surfing, you will become familiar with your cravings and learn how to ride them out until they go away naturally.

Source: The National Institute on Alcohol Abuse and Alcoholism

Build a meaningful drug-free life

You can support your drug treatment and protect yourself from relapse by having activities and interests that provide meaning to your life. It’s important to be involved in things that you enjoy, that make you feel needed, and add meaning to your life. When your life is filled with rewarding activities and a sense of purpose, your addiction will lose its appeal.

Pick up an old hobby or try a new one. Do things that challenge your creativity and spark your imagination—something you’ve always wanted to try. Learn a musical instrument, a foreign language, or try a new sport.

Adopt a pet. Yes, pets are a responsibility, but caring for an animal makes you feel loved and needed. Pets can also get you out of the house for exercise.

Spend time in nature. Take a scenic hike, go fishing or camping, or enjoy regular walks in a park.

Enjoy the arts. Visit a museum, go to a concert or a play, take an art class or write a memoir.

Get involved in your community. Replace your addiction with drug-free groups and activities. Volunteer, become active in your church or faith community, or join a local club or neighborhood group.

Set meaningful goals. Having goals to work toward and something to look forward to can be powerful antidotes to drug addiction. It doesn’t matter what the goals are, just that they are important to you.

Look after your health. Regular exercise, adequate sleep, and healthy eating habits help you keep your energy levels up and your stress levels down. The more you can stay healthy and feel good, the easier it will be to stay sober.

Don’t let relapse keep you down

Relapse is a common part of the recovery process from drug addiction. While relapse is frustrating and discouraging, it can be an opportunity to learn from your mistakes, identify additional triggers, and correct your treatment course.

What causes relapse?

Various “triggers” can put people at risk of relapsing into old patterns of substance use. Causes of relapse can differ for each person. Some common ones include:

negative emotional states (such as anger, sadness, trauma or stress)

physical discomfort (such as withdrawal symptoms or physical pain)

positive emotional states (wanting to feel even better)

testing personal control (“I can have just one pill”)

strong temptations or urges (cravings to use)

conflict with others (such as an argument with a spouse or partner)

social pressures to use (situations where it seems as though everyone else is using drugs)

good times with others (such as having fun with friends or family)

Source: Centre for Addiction and Mental Health

The important thing to remember is that relapse doesn’t mean drug treatment failure. Don’t give up. Call your sponsor, talk to your therapist, go to a meeting, or schedule an appointment with your doctor. When you’re sober again and out of danger, look at what triggered the relapse, what went wrong, and what you could have done differently. You can choose to get back on the path to recovery and use the experience to strengthen your commitment.

  ",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/drug_use_abuse%2FI%20want%20to%20stop%20using%20Drugs%20But%20I%20don.png?alt=media&token=dbafa7e4-73c7-4526-80a2-5f78ec54fe23",
                'category_id' => 3,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 33,
                'country_code' => 'ZW',
                'title' => "Repercussions Of Drug Abuse",
                'description' => "Drug use can have a wide range of short- and long-term, direct and indirect effects. These effects often depend on the specific drug or drugs used, how they are taken, how much is taken, the person's health, and other factors. Short-term effects can range from changes in appetite, wakefulness, heart rate, blood pressure, and/or mood to heart attack, stroke, psychosis, overdose, and even death. These health effects may occur after just one use.

Longer-term effects can include heart or lung disease, cancer, mental illness, HIV/AIDS, hepatitis, and others. Long-term drug use can also lead to addiction. Drug addiction is a brain disorder. Not everyone who uses drugs will become addicted, but for some, drug use can change how certain brain circuits work. These brain changes interfere with how people experience normal pleasures in life such as food and sex, their ability to control their stress level, their decision-making, their ability to learn and remember, etc. These changes make it much more difficult for someone to stop taking the drug even when it’s having negative effects on their life and they want to quit.

Drug use can also have indirect effects on both the people who are taking drugs and on those around them. This can include affecting a person’s nutrition; sleep; decision-making and impulsivity; and risk for trauma, violence, injury, and communicable diseases. Drug use can also affect babies born to women who use drugs while pregnant. Broader negative outcomes may be seen in education level, employment, housing, relationships, and criminal justice involvement.

For more information on how various drugs affect different parts of the body and disease risk, call the helpline on 393",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/drug_use_abuse%2FRepercussions%20Of%20Drug%20Abuse%20.png?alt=media&token=8ff0ffa3-7bf9-4706-a1d3-b03e82636afe",
                'category_id' => 3,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 34,
                'country_code' => 'ZW',
                'title' => "Say No To Drugs",
                'description' => "I want to stop using Drugs but I don’t Know How?

hen you are struggling with drug addiction, trying to stop may seem like an impossible goal. The road to recovery is never out of reach, no matter how hopeless your situation may be. With the right treatment and support there is room for change, all you need to do is address the root cause of your addiction and you are good to go. You may have tried and failed before but this should not hold you back, you can still overcome this problem. The road to recovery often involves bumps and setbacks but the good thing is that you have examined the problem and thinking about change. Below are some of the points that may help you in your road to change.

Keep track of your drug use, including when and how much you use. This will give you a better sense of the role the addiction is playing in your life

List the advantages and disadvantages of quitting, as well as the cost and benefits of continuing your drug abuse

Consider the things that are important to you such as you partner, career, education, kids, family and health. How does your drug use affects those things?

Ask someone you trust and who is close to you about their feelings on your drug use

Tell friends and family that you are committing to recovery, and ask for their support.

Build a sober social network. If your previous social life revolved around drugs you may need to make new connections. It is important to have sober friends. Try joining a church group, volunteering and attending events in your community.

Join a recovery support group and attend meetings regularly. You can also benefit from shared experiences of the group members and learn how they manage to stay sober.

Learn healthy ways to cope with stress. Drugs are never a solution to your stress once you are sober the stress will resurface. Try healthy ways like exercises, enjoy the beautiful view and landscape, play with your pet if u have one, and pamper yourself.

Step away from friends who use drugs.

Avoid bars and clubs, avoid any other environment and situations that associate with drug use

When seeking medical treatment do not be ashamed or humiliated about your previous drug use.

Challenge and change your thoughts. Many have a tendency of remembering the positive effects of drugs and forgetting the negative.

This may help you in your road to change and recovery. ",
                'imageUrl' => "",
                'category_id' => 3,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 35,
                'country_code' => 'ZW',
                'title' => "Signs & Symptoms Of Drug & Alcohol Abuse Among Adolescents",
                'description' => "The following symptoms may indicate that a young person is involved in or abusing drugs:

Unusual patterns of behaviour
Mood swings or attitude changes
Euphoria
Hallucinations
Alteration in personal appearance
Withdrawal from responsibilities and family contacts",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/drug_use_abuse%2FSigns%20%26%20Symptoms%20Of%20Drug%20%26%20Alcohol%20Abuse%20Among%20Adolescents%20.png?alt=media&token=c297be57-2275-4ac9-8b2b-c635def870dd",
                'category_id' => 3,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 36,
                'country_code' => 'ZW',
                'title' => "The Secret Link Between Drugs & Sex",
                'description' => "From the beginning of civilization,there has been a connection between drug use and abuse and involvement with sex .Drugs tend to encourage a level of sexual activities which might increase the probability of unsafe sexual activities. Sex under the influence of drugs or alcohol is associated with high risk sexual behaviour .Repeated drug use changes the brain, including parts of the brain that enable you to exert self-control.

Drugs and substance abuse induced sexually addictive behaviour can include:
Sex with multiple or anonymous sexual partners
Habitual one night stands
Unplanned sex with strangers in inappropriate places, such as shopping mall bathrooms, parking lots, or airports
Masturbation in inappropriate places or at inappropriate times, such as while at work or shopping
Multiple affairs
Unprotected sex
Excessive use of pornography
Phone sex or cybersex
It is important to remember that, sex and drug addicts are not bad people. Their behaviour is compelled by a bio-chemical process, and once they view their action in a sober light, they are often devastated and repulsed by their own behaviour. In order to mitigate or avoid those feelings, they will either engage in substance abuse or more sexually inappropriate behaviour.

The roots of addiction frequently lead back to trauma or a severe psychological burden. After the high has worn off, however, they are left with feelings of guilt,

shame, and remorse. This emotional aftermath can feel unbearable, and substance abuse is a way to avoid inner turmoil. ",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/drug_use_abuse%2FThe%20Secret%20Link%20Between%20Drugs%20%26%20Sex%20.png?alt=media&token=dc7c91cb-3a0a-4fb7-aaff-d1cd60b2f0c6",
                'category_id' => 3,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // Category:  Not Specified
            [
                'id' => 37,
                'country_code' => 'ZW',
                'title' => "Peer pressure",
                'description' => "Peer pressure is always tough to deal with, especially when it comes to sex. Some teenagers decide to have sexual relationships because their friends think sex is cool. Others feel pressured by the person they are dating. Still others find it easier to give in and have sex than to try to explain why not. Some teenagers get caught up in the romantic feelings and believe having sex is the best way they can prove their love.



Some things to think about before peer pressure makes the decision for you:

Not every person your age is having sex. Even if sometimes it feels like everyone is “doing it,” it is important to realize that this is not true. People often talk about sex in a casual manner, but this doesn’t mean they are actually having sex.

Hollywood doesn’t show the full story. Sexual situations are everywhere in our culture. They are on television, in movies, and even in commercials and magazines. This is part of the reason why we enjoy these things so much. Just remember: characters in these movies, television shows, and advertisements are actors and actresses. They can’t get unwanted pregnancies and STIs–you can.

 Knowing how you feel about yourself is the first big step in handling peer pressure. It’s OK to want to enjoy your teen years and all the fun times that can be had. It’s OK to respect yourself enough to say, “No, I’m not ready to have sex.”



How to avoid peer or date pressure

If you’re worried about being pressured or your currently experiencing it, know that you are not alone and there is something you can do about it.

Hang out with friends who also believe that it’s OK to not be ready for sex yet.

Go out with a group of friends rather than only your date.

Introduce your friends to your parents.

Invite your friends to your home.

Stick up for your friends if they are being pressured to have sex.

Think of what you would say in advance in case someone tries to pressure you.

Always carry money for a telephone call or cab in case you feel uncomfortable.

Be ready to call your mom, dad or a friend to pick you up if you need to leave a date.

Never feel obligated to “pay someone back” with sex in return for a date or gift.

Say “no” and mean “no” if that’s how you feel.

Resisting Negative Peer Pressure

No influence in your teenager’s life is as powerful as peer pressure. At its best, it can mobilize his energy, motivate him to strive for success, and encourage him to conform to a healthy group norm. At its worst, peer pressure can impair good judgment and fuel risk-taking behavior, drawing a child away from the family and positive influences and luring him into dangerous activities.

No matter what kind of peer pressure your children face, they must learn how to balance the value of going along with the crowd against the importance of making their own decisions. And you must ensure that your teen is comfortable with himself so that he will be able to achieve that balance. I have found in my practice that the more comfortable a teen is with his identity, the less susceptible he will be to negative peer pressure—a force that almost always leads kids to some form of trouble. Don’t let anyone, including your teen, tell you that negative peer pressure is not your business. It most definitely is, and you must find a way to teach your teenager how to deal with it maturely and responsibly.

Peer pressure comes in many different forms. I find that when most parents think of peer pressure they imagine variations on the type of situation where a bunch of teens are drinking or smoking something while one abstainer is being taunted that “everyone’s doing it.” This is only one way in which peer pressure can exert itself.

Peer pressure usually depends on the kind of peer group your child hangs out with—or the one she aspires to. Some teens run with the popular crowd. They may worry that not going along with their friends will make them outcasts or at least less popular. Then there are kids who are not in the popular group but would like to be. These teens are likely to go along with things in the hopes that it will buy them the acceptance and elevated social status they crave. There are other groups where one strong personality dominates and that person uses his or her influence over the others to lead the group into trouble. And there are kids who are not popular per se but have their own cliques. They are usually known by stereotypical labels: punks, geeks, deadheads, burnouts, and so on. Kids who are a part of these groups do not worry about what the mainstream kids think, but they worry intensely what members of their own group do. While they may think (or look like) they are bucking trends, they may be succumbing to a different set of pressures.

Why Peer Pressure Is So Powerful

As I’ve mentioned before, the very nature of adolescence compels teens to keep a close eye on their peers. They are struggling to define their own identities, and because they’re not yet sure who they are, they’re self-conscious and curious about how other people behave. It’s natural for them to try to understand themselves by looking at their friends to see how others are resolving the same issues.

Even little kids worry about making friends and being liked. But during adolescence, these fears intensify. Adolescence brings with it so much awkwardness and uncertainty, as teens find their bodies, interests, and priorities all changing at once. Belonging to a group of friends affirms their self-worth and supports them as they negotiate the rocky path toward adulthood. As they distance themselves from their parents, they increasingly use their friends as their primary confidants and rely upon their advice and support. Naturally, close friends are well suited to this role because those are the people most likely to rubber-stamp the individual’s feelings and patiently listen to his or her ruminations on life. In a normal situation, a close group of friends offers a sounding board as well as camaraderie and solace. But in a bad situation, teens adhere to their friends’ bad or ignorant advice and opinions instead of thinking for themselves or seeking a more informed opinion. Some teenagers fail to realize when they have become excessively dependent on their friends in a way that robs them of their independence and individuality. In these cases their friends have become a crutch—a way for teens to avoid making their own decisions and developing their own personality and tastes.

The Effects of Peer Pressure

It’s not surprising that peer pressure has such an impact on your teenager’s clothes, language, attitudes, and behavior. Even reasonably independent teens are not immune to the culture of conformity. Whether you like it or not, the opinions of your teenager’s peers often carry more weight than yours. After all, who does she spend most of her time with? Trust me: she’s not concerned about whether you think she’s cool. But if one of her friends should look askance at something she does or says, that could make her crumple in a heap of insecurity.

All teenagers will be exposed to peer pressure at one time or another. Parents may worry about their children’s susceptibility to adverse influences, but most teenagers seem to have a sense of when things have gone too far and when they should make their own decision rather than just going along with the crowd. And usually the influence of the peer group gradually subsides as young people mature.

Most teens I talk to don’t necessarily see peer pressure as a bad thing; it’s just a part of their lives. You’ve probably been struck by the change in your child’s behavior when his friends are around. It’s as if he has a special personality reserved for his peer group. Since being cool earns them status, teens devote a lot of their energy to this pursuit.

Types of Peer Pressure

Positive peer pressure. Any situation in which peers support and encourage constructive actions for one another is positive peer pressure. This is the type of age-appropriate peer pressure that we want to encourage. For example: team members push one another to get psyched up for a big game, or a friend encourages your teen to stay home and study hard for an upcoming exam.

Neutral peer pressure. This is the naturally occurring peer pressure to go along with the crowd in a way that’s not harmful to others. This type of pressure occurs frequently in the teenage years and should not be considered a problem. For example: your son’s friends encourage him to go with them to the movie they’re all dying to see, or a friend tells your daughter that everyone’s going to the football game Friday night and asks if she’s coming too.

Negative peer pressure. This undesirable peer pressure to do something that places a teen in danger or is hurtful to others is definitely cause for concern. For example: your daughter’s boyfriend encourages her to try using ecstasy and insists it will be fun, or your son’s friends ask him to bring his baseball bat when they gather to drive around town so that they can knock down people’s mailboxes.

All teenagers will succumb to peer pressure every now and then; it’s perfectly normal. But make certain that your child can resist negative influences because consistently taking excessive risks and engaging in hurtful behavior suggests a more serious problem.

What’s considered cool and what’s uncool varies widely from year to year and from school to school. Cool behavior can range from dressing in trendy styles to being good at a certain sport to being sarcastic to parents; uncool behavior often includes displaying excessive affection and obedience toward parents, reaching out to an unpopular classmate, and expressing interest in schoolwork.

While not all teenagers follow the cool/uncool code of their social set, they’re certainly aware of it. Many feel they have to act a certain way because it’s expected of them. That explains why they put on a show for their friends, going out of their way to do things that would never be tolerated in their own homes. It’s all to gain acceptance from their peer group.

It usually takes some convincing to get your teenager to understand that peer pressure can be dangerous. If you talk to him openly, observe his behavior carefully, and listen to him nonjudgmentally, you’ll begin to understand the pressure he’s under. He may be coaxed to drink, smoke cigarettes, and use drugs, encouraged to cut school, dared to join his friends in other risky activities, or expected to be cruel to unpopular kids. Teens are able to weather this onslaught if their resolve is strong, but it helps them to know that you understand the enormous pressures they face.

Parents Talk About Peer Pressure

“I can’t stand the kids my son hangs out with. They all look suspicious to me. I’m never sure what they’re up to, and I’m afraid he’ll just go along with anything they say. I don’t know what to do about it.”

“Our daughter spends most of her time worrying about what her friends will think. The clothes she wears, the food she eats, the movies she sees . . . everything she does seems to be for an audience. We try to talk her out of it sometimes, but she won’t listen.”

“Peer pressure is probably our greatest fear. We like to think our kid is informed about all the dangers out there, but you never know. It just takes one convincing teenager and a moment of weakness, and boom, he’s in trouble.”

Do these voices sound familiar? Most of you know very well how susceptible your teenager is to outside influences. You worry a lot about it, and with good reason. There are so many ways for today’s youth to get into trouble. Alcohol and drugs are readily available, the pressure to be sexually active is strong, pornography and hate group propaganda are available on the Internet, firearms can be bought by almost anyone, and having fun sometimes lurches consciously or unconsciously into hurting other people. This gives parents a lot to worry about.

You desperately want your children to use restraint and good judgment when they’re tempted to do inappropriate or illegal things, but this can be very difficult for a teenager craving acceptance. Therefore you have to take an active role in helping your teen develop a tough skin toward peer pressure. You can’t supervise them every hour of the day, so you have to prepare them for making decisions on their own. If you’ve discussed the risks with them, instilled in them a sense of pride, and raised them with a solid set of values, they’ll be more likely to withstand the pressures they’ll face and more likely to choose friends who are positive influences. They might even be better off for the experience of resisting challenges.

https://www.nbcnews.com

Decision making

8 Simple Steps to Good Decision-Making for youth

No one is born with awesome decision-making skills. It is a skill that needs to be learned and strengthened (but may not ever be perfected). This means the more often you make decisions the better you’ll get at it. It’s a difficult skill to perfect however, since the better you get at decision making the more challenging problems you’ll face.

Some people get nervous when it comes to making decisions because they’re afraid they’ll make wrong choices. This is the basics of decision-making. Whenever you have more than one option, there’s always a chance you’ll make a ‘better’ or a ‘worse’ decision. Although you can imagine where each decision will take you, you often won’t know how good your decision is until a period of time passes by.

While easier decisions (e.g., which shoes to wear with which top) don’t require a detailed planning process (or maybe it does?), decisions such as picking a university or college, moving out on your own, getting a job or just focusing on school, figuring out if your friends are true friends, or whether or not to report bullying or a crime you witnessed usually require more contemplation.

Keep in mind there is no right or wrong answer to many of the dilemma’s you’ll face. As a result, you’ll have to make a choice depending on what you know about yourself, your situation in life, your needs and wants, and what you think will work best for you. To help you with difficult decisions, here are 8 steps you can follow.

8 important steps…

1. What is the problem you are facing? What is the problem to be solved (e.g., to have a part-time job or to focus on school)? Write it down so you are clear on what you are trying to resolve. Write down why you should solve this issue (e.g., what are your priorities). This step gives you an idea of how important this decision is.

2. Gather information. Ask for advice. Write down what you need to learn. Interview people (e.g., other students who worked and didn’t work while in school). What do others who have already been through this say? Gather information from valid sources (e.g., speak to your school counsellor about how many hours per week does school require and how many hours per week does a part-time job require). What are the facts? What is holding you back (e.g., fear you can’t handle both, bad habits, fear of responsibility, etc.). This step gives you objective (non-biased) and subjective (biased) information.

3. What is important to you? List your values (e.g., honesty, good grades, money, independence, etc.). What conditions do you want your choice to reflect (e.g., your family’s opinion)?

4. Brainstorm and write down your possible options. Come up with ideas and choices you can choose form (e.g., work 5 or 10 or 20 hours per week, do not work, work in summer time only, etc.).

5. What are the consequences (good and bad) of each choice? Use steps 2 and 3 to determine the pros and cons of each possible choice listed in step 4. Write these down in a table so you have all the data right in front of you.

6. Decide on the best choice for you. This is much easier after you go through the above steps. Rate your options if you have to. Rank order based on your research. Take a few days to think about it if you need to and then come back to your dilemma.

7. Create a plan and carry it out. When you have made your choice, create a plan of specific steps you will take. Carry out your plan.

8. Measure the results. This can only be done once you made your decision, carried out your plan, and received feedback (e.g., your report card, regular pay). How would you rate your decision? What about the steps you took? Are you still meeting the things important to you. What lessons did you learn? This is an important step for strengthening your decision-making skills. If you find your decision didn’t work out well the first time around, use what you learned when you go back to the drawing board and re-evaluate your choice. If the first choice didn’t turn out right, it doesn’t mean game over. Retrace your steps and start from the best place possible.

https://www.lifecoachintoronto.com

COMMUNICATION SKILLS

How To Improve Communication Skills

Whether in business or in personal life, it is important for an individual to communicate efficiently. People with lower communication skills often seek information to know about how to improve communication skills. In our daily routines, we mostly communicate using different means. And the way we communicate creates an impression on others about our personality and mindset.

With improper or bad communication skills, we sometimes are not able to understand others. Similarly, others also find it difficult to grasp the meaning of what we want to say. To avoid facing such situations, we should concentrate to enhance our communication skills.

Communication and its skills are something that we learn over the time. To learn these skills, one needs to be ready and self motivated.

The best way to improve communication skills is reading. Reading helps people know the correct formation of words and sentences. Try to read as much as possible and find examples which will help you in your interactions. Always prepare yourself before you start communicating with people. It can be done by writing your speech and practicing it before you finally deliver it.

Increase your interactions with people having good communication skills. These people will work like personal trainers for you. Try to collect knowledge on various general and specific topics and increase your vocabulary. Nice and unique words make a long lasting impression on receivers. They also increase the assertiveness and confidence in some unfamiliar situations.

Help people understand your thoughts by using gestures and body language. Always remember that actions speak louder than words. While talking to others keep a smiling face and appreciate their involvement and efforts.

Make small communications and give time to others to understand you. Use humor wherever required. It puts the other person at ease and draws natural responses from him. Show interest in people you are communicating with to attract their attention. Make eye contact with them to show your positive outlook.

Control your tone and be polite to others. Never be aggressive and avoid talking quickly. Use language people are familiar with. Always remember what you understand should be exactly understood by others to yield positive outcomes.

Stay relaxed and focused and take your time before jumping on to different subjects. Collect feedback from listeners to know the accuracy and the effect of your communication. Feedback is the biggest motivating tool a speaker can get from the listeners.

The various ways to help people know about how to improve communication skills are very helpful indeed. And if followed properly they can infuse positive attitude, confidence and self morale in a person and guide him on the way to success.

Communication Skills In Relationships: An Overview

Relationships play a very critical part in personal and professional lives. Good relationships always results in a sense of self regard, satisfaction and balance. Communication skills in relationships are an important ingredient to achieve all this. Meaning that the essence of any relationship lies in the ability to give and receive.

The quality of a relationship between two persons depends on the communication between the two persons. The better your communication skills are, the better your relationships would be. Now lets discuss as to what communication skills youve got to develop in order to maintain healthy relationships with others.

The first quality is the ability to listen what the other person is trying to say. This may sound very simple, but many people fail to give proper attention to what the other person is saying. As a result, the speaker feels dejected, frustrated or insignificant.

What you need to do here is not only listen what the other person is saying but also maintain proper eye contact with the person and nod occasionally to show that you interested in what is being discussed. When you aren’t clear about something that is being discussed with you, take the initiative to ask questions for clarification.

The second quality that you require to communicate effectively is speaking. Like listening, it is important to organize your thoughts before communicating. This way, you are well prepared to present your viewpoint in a logical way.

To perform effectively, you need to put all your thoughts into chunks of information that is lucid to understand. Long lectures without any direction can cause your listeners to lose interest. So it is important to avoid this.

Also your voice, tone and rhythm are vital aspects that you need to take care of when you speak. Many times, it is natural to feel that you may be wrong what you are going to speak, what will happen if the person already knows what you are going to speak and other sorts of questions.

But you must realize that by holding yourself back, you are not only suppressing your feelings, knowledge and opinion. You are also denying the other person the opportunity to learn about you. This can affect you greatly in the long run.

Good relationships have a lot of benefits. It brings two individuals together. This is why communication skills for couples or communication skills in marriage assume significance. This also clears disagreements and misunderstandings between two people if there is proper communication between the two.

Relationships can work mutually only when we listen properly and speak frankly to the other. Thus, communication skills in relationships have great significance in bringing overall progress and better relationships with each and everybody.

https://www.communicationskillsworld.com



Refusal Skills

Description of the Skill

The purpose of refusal skills is to give youth the ability to say NO to unwanted sexual advances or risky situations. There are several essential components to an effective refusal or NO statement. Youth need to understand the components that make up an effective NO before they observe or practice the skills. Here are the four essential components of an effective NO:

Use the word NO. There is no substitute. Everyone understands the meaning of the word NO.

Effective use:  \"NO, you can't copy my homework.\" (direct NO)
Ineffective use: \"I don't know. You really shouldn't copy homework.\" (weak NO)

Give a strong nonverbal NO message. There are many body movements that can support a verbal NO message. For example:

Hands off gesture: Use hand or arm movements for emphasis.
Stiff body: Sit or stand stiffly. Stomp away from the other person if you have to.
Serious expression: Use an \"I mean it\" face.
Other body movements: Cross arms and legs for emphasis.
Fight back: If all else fails, push the person away and protect yourself.

Effective use: Arms crossed or hand on hips while saying, \"NO, you can't copy my homework.\"
Ineffective use: Slouching and handing over homework while saying, \"You really shouldn't copy my homework, but you can look at it.\"

Use a firm tone of voice to support the NO message. The way you say something often gives a stronger message that the words you use.

Effective use: Use a firm voice while saying, \"NO, you can't copy my homework.\"
Ineffective use: Use an unconvincing voice while saying, \"I don't know; you really shouldn't copy my homework.\"

Repeat the NO message as much as needed. Eventually, the person will get the message or give up.

Effective use: I told you once already, \"NO, you can't copy my homework.\"
Ineffective use: Failing to repeat the message.

Source: Safer Choices, ETR Associates, Santa Cruz, CA, 1998.1 https://recapp.etr.org

NEGOTIATION SKILLS

Skills for Successful Peer Negotiation

Successful peer negotiation requires a range of communication and personal skills.

These skills include:

Strong self-esteem, to ensure that you value yourself.

Effective collaboration requires a belief that your views are worthwhile, and equal to those of others; an equal concern for self and others. Without this, it will be tempting to simply give up, and create a ‘win-lose’ situation, where you are the loser.

You may find it helpful to read our page on Transactional Analysis to explore more about the position of ‘I’m OK, you’re OK’, which is fundamental to effective peer negotiation and collaboration.

The ‘other side of the coin’ from self-esteem, empathy.

This ensures that you are able to see others’ points of view, and put yourself in their place. With good empathy, you will come to value others as much as you value yourself, and recognise why ‘win-win’ is so important.

An ability to put your point across assertively, and not aggressively.

This requires an ability to accept challenges from others, and to challenge effectively and calmly when you believe that something is unfair. See our pages on Assertiveness for more. You may also find it helpful to read our pages on Anger Management, as becoming angry can prevent calm, assertive behaviour.

As with so many interpersonal activities, it is impossible to collaborate effectively without being able to listen well.

This means putting aside any thoughts about how you are going to respond, and simply concentrating on what the other person is saying. This includes non-verbal communication as well as the words that they are using. For more about this, see our pages on Listening Skills, Active Listening and Non-Verbal Communication.

You will need to be able to ask good questions to clarify points.

You need to check that you have correctly understood what someone else has said. You may also need to ask questions to clarify anything that is unclear. For more about questioning techniques, and clarification, see our pages on Questioning Skills, Types of Question, Reflecting and Clarifying.

Finally, in any interpersonal situation, it is always important to reflect on what went well and less well.

It is good to get into the habit of thinking about what happened, and how you could have improved on it. Developing habits of reflective practice will probably help you throughout your life, not only in peer negotiation situations.

Conflict Resolution and MediationSee also: An Introduction to Conflict Resolution

Conflict, or more specifically, interpersonal conflict, is a fact of life, and particularly of organisational life. It often emerges more when people are stressed, for example, when there are changes on the horizon, or when everyone is under pressure because of a looming deadline.

However, conflict can also arise in relationships and situations outside work.

Handling conflict in ways that lead to increased stress can be detrimental to your health. Poor conflict management can lead to higher production of the stress hormone cortisol, and also cause hardening of the arteries, leading to increased risk of heart attacks and high blood pressure.

Learning to deal with conflict in a positive and constructive way, without excessive stress, is therefore an important way to improve your well-being as well as your relationships.

What is Conflict?

Interpersonal conflict has been defined as:

“An expressed struggle between at least two interdependent parties who perceive incompatible goals, scarce resources, and interference from the other party in achieving their goals”.

Unpicking this a little, it means that for a disagreement to become a conflict, there needs to be:

Some element of communication: a shared understanding that there is a disagreement;

The well-being of the people involved needs to depend on each other in some way. This doesn’t mean that they have to have equal power: a manager and subordinate can be equally as interdependent as a married couple;

The people involved perceive that their goals are incompatible, meaning that they cannot both be met;

They are competing for resources; and

Each perceives the other as interfering with the achievement of their goals.

Conflict is not always a bad thing

Conflict can be destructive, leading people to develop negative feelings for each other and spend energy on conflict that could be better spent elsewhere. It can also deepen differences, and lead groups to polarise into either/or positions.

However, well-managed conflict can also be constructive, helping to ‘clear the air’, releasing emotion and stress, and resolving tension, especially if those involved use it as an opportunity to increase understanding and find a way forward together out of the conflict situation.

Our pages on conflict resolution, criticism and mediation provide advice and support for dealing with conflict and other potentially difficult situations:

01 - Conflict and Conflict Resolution

There are times when it is important to be able to communicate under difficult circumstances.

While many of us would prefer to avoid difficult conversations, sometimes this is not possible. For example, a manager may have to tell someone that they are being made redundant, or a child confess to their parents that they are struggling at school.

Before you can start to resolve any conflict, you need to be able to understand its source, and therefore the type of conflict.

02 - Complaints and Criticism

Complaints and criticism may not sound like they fit naturally with conflict resolution. But in real life, both complaints and criticism can be a source of considerable conflict, and knowing how to complain and criticise effectively, in a way that does not cause conflict, is a very useful interpersonal skill.

03 Mediation Skills

Sometimes informal conflict resolution is not enough.

It is important to know when to step away from a conflict situation and ask someone more skilled to mediate. While most of us will not be called upon to mediate in an international conflict, or even an industrial relations problem, developing some mediation skills can be helpful when conflict has escalated beyond the normal level.

Conflict is a Fact of Life

Interpersonal disagreements are a fact of life, which means that so also is interpersonal conflict.

Learning to handle difficult situations so that they become more positive, and deal well with criticism, can help to avoid some conflict. Developing your conflict resolution and mediation skills can also help to ensure that conflict becomes a positive experience, rather than negative.

The use of material found at skillsyouneed.com is free provided that copyright is acknowledged and a reference or link is included to the page/s where the information was found. Material from skillsyouneed.com may not be sold, or published for profit in any form without express written permission from skillsyouneed.com.

Conflict and Conflict Resolution

There are times when it is important to be able to communicate under difficult circumstances.

While many of us would prefer to avoid difficult conversations, sometimes this is not possible. For example, a manager may have to tell someone that they are being made redundant, or a child confess to their parents that they are struggling at school.

Complaints and Criticism

Complaints and criticism may not sound like they fit naturally with conflict resolution. But in real life, both complaints and criticism can be a source of considerable conflict, and knowing how to complain and criticise effectively, in a way that does not cause conflict, is a very useful interpersonal skill.



Sometimes informal conflict resolution is not enough.



It is important to know when to step away from a conflict situation and ask someone more skilled to mediate. While most of us will not be called upon to mediate in an international conflict, or even an industrial relations problem, developing some mediation skills can be helpful when conflict has escalated beyond the normal level.

Read more at: https://www.skillsyouneed.com/ips/conflict-and-mediation.html



MEDIA LITERACY

Media literacy is the ability to identify different types of media and understand the messages they're sending. Kids take in a huge amount of information from a wide array of sources, far beyond the traditional media (TV, radio, newspapers, and magazines) of most parents' youth. There are text messages, memes, viral videos, social media, video games, advertising, and more. But all media shares one thing: Someone created it. And it was created for a reason. Understanding that reason is the basis of media literacy. (Learn how to use movies and TV to teach media literacy.)

The digital age has made it easy for anyone to create media. We don't always know who created something, why they made it, and whether it's credible. This makes media literacy tricky to learn and teach. Nonetheless, media literacy is an essential skill in the digital age.

Specifically, it helps kids:

Learn to think critically. As kids evaluate media, they decide whether the messages make sense, why certain information was included, what wasn't included, and what the key ideas are. They learn to use examples to support their opinions. Then they can make up their own minds about the information based on knowledge they already have.

    Become a smart consumer of products and information. Media literacy helps kids learn how to determine whether something is credible. It also helps them determine the \"persuasive intent\" of advertising and resist the techniques marketers use to sell products.

    Recognize point of view. Every creator has a perspective. Identifying an author's point of view helps kids appreciate different perspectives. It also helps put information in the context of what they already know -- or think they know.

Create media responsibly. Recognizing your own point of view, saying what you want to say how you want to say it, and understanding that your messages have an impact is key to effective communication.

Identify the role of media in our culture. From celebrity gossip to magazine covers to memes, media is telling us something, shaping our understanding of the world, and even compelling us to act or think in certain ways.

Understand the author's goal. What does the author want you to take away from a piece of media? Is it purely informative, is it trying to change your mind, or is it introducing you to new ideas you've never heard of? When kids understand what type of influence something has, they can make informed choices.

https://www.commonsensemedia.org",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/mixed_bag%2FPeer%20pressure%20.png?alt=media&token=85f8ff37-c462-497e-84cd-8e5435214ee6",
                'category_id' => 7,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 38,
                'country_code' => 'ZW',
                'title' => "Puberty - Changes In Boys & In Both Boys & Girls",
                'description' => "1 PUBERTY is a time of change.  During this time many changes occur as girls become women and boys become men. These changes are natural, caused by hormones--oestrogen and progesterone in girls and testosterone in boys.  It can be a frustrating time for boys and girls as they begin to look different from their friends.



Puberty in girls begins at about age 10, while in boys it begins a year or two later.



2 COMMON CHANGES

Both boys and girls will experience these changes but at different times and in varying degrees.



3 Physical

Rapid growth both in height and weight

Skin problems such as pimples/acne

Hair development in the pubic area and armpits

Increased sweating leading to stronger body odour

Voice changes



3 Psychological and emotional

Attraction and preoccupation with the opposite sex

Sensitivity to self-image

Unpredictable moods

Rebellious tendencies



These changes are signs that one is sexually maturing.



Specific Changes in Boys

Voice breaks

Broad shoulders and muscular body

Proportionate growth in the reproductive organs

Wet dreams, also called nocturnal emissions



When a boy begins experiencing wet dreams, he is capable of making a girl pregnant. Some boys will have more wet dreams than others.



Specific Changes in Girls

Breast develops

Hips widen

Proportionate growth in the reproductive organs

Menstruation starts – also known as monthly periods



A girl who has undergone these changes can fall pregnant.



Going through puberty means that girls and boys should know how to relate to each other in healthy ways, because irresponsible sexual behaviour may lead to pregnancy, and/or sexually transmitted infections and HIV.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/mixed_bag%2FPuberty%20-%20Changes%20In%20Boys%20%26%20In%20Both%20Boys%20%26%20Girls.png?alt=media&token=a0bd3dea-54e6-45be-bcae-666f6ce75041",
                'category_id' => 7,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 39,
                'country_code' => 'ZW',
                'title' => "Puberty - Hygiene Of Sexual & Reproductive Organs",
                'description' => "Frequent Bathing:

Oil and sweat glands in the genital area of boys’ and girls’ bodies become active at puberty, so regular bathing or showering is important for both males and females. This cleanses the genitals and keeps them odour free. Young people should learn to pay special attention to the armpits, feet, and between the buttocks. Regular washing of the face is also important.



Bathing regularly and wearing clean clothes will usually keep a person smelling clean and fresh.  Because sweat glands become more active during adolescence some people like to use a deodorant and /or antiperspirant product. Deodorants are designed to cover up natural body odours; antiperspirants are designed to absorb perspiration in the armpits and reduce underarm wetness.



Each person has to decide whether her or his body odour or amount of perspiration requires the use of one of these products.



Extra care and hygiene are important during menstruation. Pads and tampons should be changed frequently, and pants should be washed and dried properly.



Using Sanitary Ware:

A sanitary pad is an absorbent item worn by a woman while she is menstruating, recovering from vaginal surgery, for post birth bleeding (lochia), abortion or any other situation where it is necessary to absorb a flow of blood from a woman’s vagina. They are worn externally between the vulva and a woman’s undergarment. Some women use cotton wool in place of pads.



Alternatively, some women use washable or reusable cloth. The cloth has to be highly absorbent, such as cotton flannel as the best way to prevent pimples/acne. Washing the skin two or three times a day with regular soap may be enough for some teens, while others need to use a special soap with ingredients that kill bacteria, such as carbolic soap.



Menstrual Discomfort:

Menstrual discomfort differs for all girls and women. Some have painful cramps before and during their periods; others do not. Cramps are caused when the uterus contracts during menstruation. This means that muscles around the uterus tighten and relax to help the uterus shed its lining. This may be uncomfortable, but is normal.  Applying a warm compress where the cramps are felt can reduce pain, in many cases.  Other possible remedies include:



A hot bath

A walk

A hot beverage (such as tea)

Pain-relieving medication such as ibuprofen or acetaminophen can be taken if cramps are severe



If very serious cramps occur frequently, a girl may need to consult her health practitioner. Some premenstrual symptoms, such as bloating, tender breasts, headaches, constipation and feeling tired and irritable can be prevented by:

Cutting down on salt and salty foods to avoid retaining water

Exercising more frequently to speed up circulation

Drinking more water to aid digestion and prevent constipation



Pelvic Examination:

This is a routine examination of a woman’s reproductive and sexual organs to be sure they are healthy and normal and to check for early signs of infection or medical problems. Girls should begin having pelvic examinations by age 18 or earlier if they are sexually active, and have an examination every 2 years.



Many girls are nervous about having their first pelvic examination, but the examination need not be painful and is important for maintaining reproductive health, especially for sexually active adolescents.



Breast Self-Examination:

The self-examination technique is very important to detect early signs of breast cancer. Breast self-examination consists of feeling each breast in a circular motion to search for any lumps or thickening that could signal cancer. Teenagers rarely get breast cancer, but getting in the habit of doing self-examination once a month is a good idea. By age 25, all women should examine their breasts once a month.



Douching:

Douching is the rinsing of the inside of the vagina.  Douching is not usually recommended since it washes away the natural bacteria that keep the vagina clean and free of infection. Some women like to douche, especially after menstruation or intercourse. Douching does not prevent one from getting pregnant or sexually transmitted infections including HIV.



How to keep external female reproductive organs clean

Use soap and water to wash the external genitalia and under your arms every day, especially during menstruation.

Use either a disposable pad made of cotton, which has a nylon base, or a clean piece of cotton cloth to absorb blood during menstruation.

Properly dispose of the pad after each use or, wash and dry the piece of cloth used as menstrual pad before reuse.

Wash only the external genitalia. Do not try to clean the inside part of the vagina.

While washing, wash starting from the vagina towards the anus. Do not wash from the anus towards the vagina. This will allow germs to enter the inner genitalia easily and cause infection.

Be aware of abnormal fluids from your vagina. Do not confuse this with normal vaginal fluids.

If you see any changes in the vaginal fluid – a change in color or odor, please visit a health professional.



How to keep the male reproductive organs clean

The penile area releases smegma (a whitish substance) under the folds of the foreskin. The collection of smegma produces an unpleasant odour. Regular bathing is necessary to keep the penis healthy and clean.

Wash the external genitalia at least daily with soap and water, as you wash the rest of the body.

Boys who are not circumcised need to pull back the foreskin and gently wash underneath it with clean water.

Be aware of any abnormal fluids coming from your penis. Do not confuse this with the presence of normal fluids.

If you see any abnormal fluid or wound, please visit a health professional. ",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/mixed_bag%2FPuberty%20-%20Hygiene%20Of%20Sexual%20%26%20Reproductive%20Organs%20.png?alt=media&token=85c0ddf9-d18a-4e86-abb4-be4361c89999",
                'category_id' => 7,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 40,
                'country_code' => 'ZW',
                'title' => "VALUES, RIGHTS & SEXUALITY",
                'description' => "
Values are strong feelings or beliefs about important issues in life. Values guide our behaviour and give purpose and direction to our life. Values are a product of personal experience, socio-economic changes, religious background, cultural values, media, sex and gender. Values are highly subjective. They differ from time to time, place to place and amongst individuals and cultures.  Different individuals have different values. It should be noted that open, factual, respectful decisions about sexuality and values can equip young people with the ability, confidence to make fully informed decisions about their sexual and reproductive health lives & they will transition into safe adulthood.

Values help people decide how to behave and interact with others. Young people`s values are derived from their parents and other family members, community, religious teachings, teachers and their peers. Whilst parents may want their children to develop values similar to their values, young people of today have multiple sources of socialization such as social media that can have significant impact on their individual values different from their parents and guardians. Values influence decisions of an individual about sexual relationships, friends, money and work. Relationships are stronger if the two individuals share similar values. Values are taught to children by giving example.

18 examples of values in Sexuality:

Sexuality is a natural and healthy part of living.

All persons are sexual.

Sexuality includes physical, ethical, psychological and emotional dimensions.

Individuals express their sexuality in varied ways. People should respect and accept diversity of values and beliefs about sexuality that exist in a community.

All sexual decisions have effects and consequences.

Sexual relationships should never be coercive, exploitative or lead to ill health.

Sexual relationship is associated with honesty, equality, responsibility and social acceptance.

Premature involvement of sexual behaviour poses risks.

Abstaining from sexual intercourse is the most effective method of preventing pregnancy, sexually transmitted diseases (STD) and HIV/AIDS infection.

The society as well as children are benefited when they discuss sexuality with their parents, teachers or other trusted adults.

No discrimination should be made on the basis of sex, culture, language, religion, caste or colour.

Love is different from infatuation.

All children should be loved and cared for.

Men and women are equal, but they are different in respect of their sexuality.

Men and women are not OPPOSITE sexes, but COMPLIMENTARY sexes.

Menstruation is not a curse but a boon for motherhood.

Virginity is in the mind, not between two legs.

Sex organs and their functions are natural and not dirty.

Source: online

HUMAN RIGHTS AND SEXUALITY

SRH is not just about  health care or information about disease- its also about rights and choices. SRH is a human right and is fundamental to humam survival and development.

Human rights are basic rights and freedoms that all people are entitled to regardless of nationality, sex, age, national or ethnic, origin, race & language or other status. They are conceived as universal and egalitarian with all people having equal right by virtue of being human beings. These rights may exist as natural rights or legal rights in both national and international contexts.

Sexual rights

Include the human rights of women and men to have control over and decide freely and responsibly on matters related to their sexuality.

Reproductive rights

Are integral part of human rights. They are the basic rights of women and men to decide freely and responsibly on issues of sexuality and family planning, to have access to information to make these decisions and the means to carry them out. Reproductive rights include the right to attain the highest standard of sexual and reproductive health and the right to decide on issues of reproduction free of discrimination, coercion and violence.

CULTURE, SCOIETY & SEXUALITY",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/mixed_bag%2FVALUES%2C%20RIGHTS%20%26%20SEXUALITY%20.png?alt=media&token=c9e6213f-8b24-4b49-87b9-71f46c50d2f7",
                'category_id' => 7,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 41,
                'country_code' => 'ZW',
                'title' => "The Menstrual Cycle",
                'description' => "THE MENSTRUAL CYCLE

Menstruation is a blood loss from the uterus through the vagina which occurs when the uterine lining (endometrium) is shed.  Menstruation occurs when there is no fertilization of the woman’s ovum and it lasts from 2 – 7 days.

Female fertility is cyclic, unlike male fertility, which is relatively constant.  Ovulation occurs only once a month and is regulated by a hormone system that involves the hypothalamus, the pituitary gland, and the ovaries.



Menstrual Cycle Regulation

The menstrual cycle is regulated in the hypothalamus. During puberty, the hypothalamus begins secreting hormones that stimulate the pituitary gland to secrete follicle-stimulating hormone (FHS) and luteinizing hormone (LH). In turn, FSH and LH stimulate production of the ovarian hormones oestrogen and progesterone respectively and interact with them to regulate ovulation and menstruation. Anything that disrupts the balance of these four hormones during the cycle can disrupt reproductive function.



Menstrual Cycle Length

In this session chapter, the menstrual cycle events are described for an average 28-day cycle; but a normal menstrual cycle can last anywhere from 21 to 35 days. The menstrual cycle can be divided into two distinct phases: The first phase begins with the onset of menses and ends at ovulation and the second phase spans the time from ovulation, until the first day of the next menses. The length of the second half of the cycle is very consistent, usually 14 days. For some women, the length of the first half is less consistent and may last anywhere from 12 to 21 days.



The First Phase of the Cycle (FOLLICULAR PHASE)

Days 1 – 2 The menstrual cycle begins with the first day of menstrual bleeding.  The lining of the uterus begins to shed, because levels of oestrogen and progesterone have declined from the previous cycle.  During the first few days of the cycle, numerous ovarian follicles begin growing.  These follicles are balls of cells, each containing an oocyte.  During a menstrual cycle a woman may have 10 to 20 follicles growing.  The cervical mucus is thick, cloudy and scant.

Days 3 – 5 For most women, bleeding will end sometime during these days.  About one-third of the endometrial lining remains after the bleeding ends.

Day 6 – 11 Oestrogen, produced by the ovarian follicles, is primarily responsible for stimulating regrowth of the lining during this time, and thereby ensuring a nutritious home for the potential embryo. This lining will be shed at the end of the cycle if pregnancy is not attained. The hormone levels are generally low during this period, but the pituitary sends increased amounts of FSH to help mature the follicles.  Most of the 10 to 20 follicles grow briefly, then recede. One remains to mature. Because it is so receptive to FSH, the remaining follicle continues to grow and produces the oocyte for that cycle. It is also responsible for producing increased amounts of oestrogen.

Day 12 – 13 Oestrogen production accelerates, triggering a sudden increase in LH. As LH reaches its peak, oestrogen production is temporarily inhibited, causing its level to dip. This combination of hormonal surge and dip is thought to cause ovulation. A slow increase in progesterone production also begins here just before mid-cycle. Because of the temporary midcycle dip in oestrogen level, a brief interval of midcycle endometrial bleeding can occur.  Ovulation takes place 34 to 36 hours after the LH surge begins (10 to 12 hours after LH peaks).

Ovulation

Day 14 Ovulation may take place earlier or later, but it is normally about 14 days before onset of the next menses. The ovary releases a mature egg (oocyte). As the follicle ruptures it releases 1 cc to 10 cc of follicular fluid, and the barely visible oocyte passes into the fallopian tube. Lower abdominal pain is often associated with ovulation. The cervical mucus at ovulation is copious, thin, and clear. This mucus can be stretched into a strand several inches long (this type of mucus is known as spinnbarkeit) and forms a fern pattern when dried on a microscope slide.



The Second Half of the Cycle (LUTEAL PHASE)

Days 15 – 28 After the follicle ruptures at ovulation, the follicle walls collapse, and follicle cell becomes the corpus luteum. The corpus luteum stays in the ovary and secretes increasing levels of oestrogen and progesterone. The increased progesterone causes a change in cervical mucus, making it scant but thick and sticky.

The endometrial lining is now preparing to support an embryo and allow implantation.  Progesterone levels reach their peak in the middle of the luteal phase, and FSH and LH levels fall. If fertilization does not occur, the corpus luteum disintegrates and the levels of hormones drop off, causing the endometrial lining to shed and menstrual bleeding to begin.



Problems Faced by Girls

Premenstrual Syndrome

Dysmenorrhoea

Amenorrhoea

Lack of control in relationships

Female Genital Mutilation

Cancers of the reproductive system e.g. cervical

Complications of pregnancy



Dysmenorrhoea

Menstrual cramping, or dysmenorrhoea, may occur with ovulatory cycles.  Some women may experience cramping throughout their reproductive lives, some only intermittently, and others experience cramping rarely or never. Uterine cramping is caused by prostaglandins released when the lining of the uterus sheds. These prostaglandins cause uterine muscle to contract and smooth muscle contractions in the digestive tract cause other symptoms such as nausea and diarrhoea.

Many women find their cramping pain is relieved by resting applying gentle heat to the area, or taking common medications such as aspirin or ibuprofen (a very effective prostaglandin inhibitor). Combined oral contraceptive pills can prevent dysmenorrhoea because they suppress ovulation.  In some cases, progestin-only contraceptives may relieve dysmenorrhoea.

When evaluating menstrual cramping, rule out the possibility of infection or early pregnancy because cramping pains may also be caused by disorders that may need treatment:

Pelvic inflammatory disease (PID)

Fibroid tumours (leiomyomata)

Endometriosis or adenomyosis

Endometrial cancer

Ectopic pregnancy, spontaneous abortion, or retained products of conception.



Abnormal Bleeding

For most women, the menstrual cycle lasts between 21 and 35 days, with 3 to 7 days of bleeding. The average women will pass about 15 ccs of bloody fluid.  Some women will have spotting (light bleeding) at mid-cycle, which is triggered by the temporary drop in oestrogen levels occurring with ovulation. Hormonal contraceptives can alter menstrual bleeding patterns, causing amenorrhea, spotting between periods, or heavier bleeding.

A woman who experiences abnormal bleeding needs to be evaluated to discover the cause. In rare cases, a woman with abnormal bleeding may need emergency care.  Heavy blood loss can lead to shock. Early symptoms of shock include severe fatigue, faintness or weakness, dizziness.

  ",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/mixed_bag%2FThe%20Menstrual%20Cycle%20.png?alt=media&token=1baba587-ce2a-4755-970a-b8e2b3aaef07",
                'category_id' => 7,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 42,
                'country_code' => 'ZW',
                'title' => "Understanding gender",
                'description' => "The term gender refers to the social diﬀerences between females and males throughout the life cycle that are learned, and though deeply rooted

in every culture, are changeable over time and have wide

variations both within and between cultures. “Gender” determines the roles, power and resources for females and

males in any culture. Historically, attention to gender relations has been driven by the need to address women’s

needs and circumstances as women are typically more

disadvantaged than men. Increasingly, however, the humanitarian community is recognizing the need to know

more about what men and boys face in crisis situations

GENDER HANDBOOK IASC

I Gender stereotypes/stereotyping

The international human rights law framework is concerned with gender stereotypes and stereotyping that affects recognized human rights and fundamental freedoms.

A gender stereotype is a generalised view or preconception about attributes or characteristics that are or ought to be possessed by, or the roles that are or should be performed by women and men. A gender stereotype is harmful when it limits women’s and men’s capacity to develop their personal abilities, pursue their professional careers and make choices about their lives and life plans. Harmful stereotypes can be both hostile/negative (e.g., women are irrational) or seemingly benign (e.g., women are nurturing). It is for example based on the stereotype that women are more nurturing that child rearing responsibilities oftenfall exclusively on them.



Gender stereotyping refers to the practice of ascribing to an individual woman or man specific attributes, characteristics, or roles by reason only of her or his membership in the social group of women or men. Gender stereotyping is wrongful when it results in a violation or violations of human rights and fundamental freedoms. An example of this, is the failure to criminalize marital rape based on societal perception of women as the sexual property of men.



Compounded gender stereotypes can have a disproportionate negative impact on certain groups of women, such women in custody and conflict with the law, women from minority or indigenous groups, women with disabilities, women from lower caste groups or with lower economic status, migrant women, etc.



International human rights law places a legal obligation on States to eliminate discrimination against women and men in all areas of their lives. This obligation requires States to take measures to address gender stereotypes both in public and private life as well as to refrain from stereotyping. The Convention on the Elimination of All Forms of Discrimination against Women (CEDAW) provides in its article 5 that, “State Parties shall take all appropriate measures to modify the social and cultural patterns of conduct of men and women, with a view to achieving the elimination of prejudices and customs and all other practices which are based on the idea of the inferiority or the superiority of either of the sexes or on stereotyped roles for men and women.” Other human rights treaties also require States Parties to address harmful stereotypes and the practice of stereotyping. For example, the Convention on the Rights of Persons with Disabilities (CRPD) also contains in article 8(1)(b) obligates States to stereotypes and stereotyping, including compounded stereotypes and stereotyping based on gender and disability.

https://www.ohchr.org

Impact of Socialization on Gender?

Socialization & Gender Roles

Growing up, what kind of toys did you play with? If you are a boy, did you play with trucks, action figures, toy weapons, or sports equipment? If you were a girl, did you play dress-up, play with dolls, or pretend kitchen sets? If you said yes to any of the examples, there is nothing wrong with that, but if you feel that those are the only types of things boys or girls should play with, it is most likely because you have been taught that that was the acceptable thing to believe.

As we grow, we learn how to behave from those around us. At a very early age, children are introduced to certain roles that are typically linked to their biological sex. The term gender role refers to society's concept of how men and women are expected to act and how they should behave. These roles are based on norms, or standards, created by society. In African culture, masculine roles are usually associated with strength, aggression, and dominance, while feminine roles are usually associated with passivity, nurturing, and subordination. Role learning starts with socialization at birth. Even today, our society is quick to outfit male infants in blue and girls in pink, even applying these color-coded gender labels while a baby is in the womb.

And when we think back to the toys that we played with growing up, we also learned certain gender roles. The types of toys that we mentioned that parents give their daughters often teach them that their role is to be nurturing or delicate and that the role playing they engage in is to take care of others or may be too fanciful to be useful in real life, like being a princess. Meanwhile, the types of toys that parents give their sons, like trucks, toy guns, and superhero paraphernalia, are meant to promote motor skills, aggression, and solitary play.

Furthermore, playing with things that promote aggression often leads to us hearing the phrase that 'boys will be boys,' which is often used to justify behavior such as pushing, shoving, or other forms of aggression. The phrase implies that such behavior is unchangeable and something that is part of a boy's nature, and boys and men accept that behavior because it meshes with the cultural script for masculinity. The 'script' written by society is in some ways similar to a script written by a playwright. Just as a playwright expects actors to adhere to a prescribed script, society expects women and men to behave according to the expectations of their respective gender role. Scripts are generally learned through a process known as socialization, which teaches people to behave according to social norms.

Agents of Socialization

We've already said that children learn at a young age that there are distinct expectations for boys and girls and that one of the earliest ways that they learn gender roles is through play. And as children get older, gender roles continue to be reinforced by different groups. We call the groups that promote or enforce social norms and roles agents of socialization. Gender socialization occurs through four major agents of socialization: family, education, peer groups, and mass media. Each agent reinforces gender roles by creating and maintaining expectations for gender-specific behavior.

Family is the first and most influential agent of socialization. The gender roles that a child learns here set the tone for the child later on through life and make it increasingly difficult for a child to later change their thought process. There is considerable evidence that parents socialize sons and daughters differently. For instance, boys are allowed more freedom and independence at an earlier age than daughters. They may be given fewer restrictions on appropriate clothing, dating habits, or curfew. Sons may also be free from performing domestic duties, such as cleaning or cooking and other household tasks that are considered feminine. Daughters, on the other hand, may be limited by their expectation to be passive and nurturing, generally obedient, and to assume many of the household responsibilities. ",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/mixed_bag%2FUnderstanding%20gender%20.png?alt=media&token=9fbc53ac-0834-46f5-8469-1dac573c3952",
                'category_id' => 7,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // Category: Pregnancy
            [
                'id' => 43,
                'country_code' => 'ZW',
                'title' => " Antenatal Care",
                'description' => "Antenatal care is the care given to a pregnant woman from the time of pregnancy confirmation till the onset of labour. Its aim is to monitor the progress of pregnancy to enhance maternal and foetal health. The midwife or health service provider critically evaluates the physical, psychological and sociological effects of pregnancy on the woman and her family. ",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/pregnancy%2FAntenatal%20care%20.png?alt=media&token=4c23f3dc-6816-4c51-b5c6-2cad6e41e64d",
                'category_id' => 5,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 44,
                'country_code' => 'ZW',
                'title' => "Avoid These When Pregnant",
                'description' => "Avoid These When Pregnant. If Not For You But For Your Baby

To have the best chance of having a healthy baby, a pregnant woman should avoid:

smoking

alcohol

street drugs

large amounts of caffeine

artificial sweeteners

 ",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/pregnancy%2FAvoid%20These%20When%20Pregnant.png?alt=media&token=d0b97a0b-49fe-44ce-ac46-33618b050966",
                'category_id' => 5,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 45,
                'country_code' => 'ZW',
                'title' => "Early Signs and Symptoms",
                'description' => "Missed period- A missed period is usually one of the first sign that a woman is pregnant. Usually, this is when a period is 7 days or more late depending on the regularity of the cycle. However, there are some women who miss their periods yet they are not pregnant. It is therefore important to get a pregnancy test done as soon as one suspects pregnancy.

Breast Changes- During early pregnancy, nipples begin to largen, darken and the veins become more pronounced. This is due to the fact that the mammary glands will be preparing for eventual breast feeding.

Nausea and vomiting- This is popularly known as “morning sickness.”  Nausea and vomiting are generally caused by hormonal changes particularly increased levels in progesterone. They are further worsened by keeping an empty stomach. It is therefore essential to keep snacks on hand or to eat small meals during the day so as to lessen this effect.

Frequent urination- During early pregnancy, a woman may find herself visiting the toilet frequently. The extra blood flow makes the pregnant woman’s kidneys to produce up to 25% more urine soon after conception.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/pregnancy%2FEarly%20Signs%20and%20Symptoms%20.png?alt=media&token=5bbd8cfc-9ca1-4296-9330-86b751054061",
                'category_id' => 5,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 46,
                'country_code' => 'ZW',
                'title' => "Pregnancy Prevention",
                'description' => "Family planning

Family planning allows individuals and couples to anticipate and attain their desired number of children and the spacing and timing of their births. It is achieved through use of contraceptive and treatment of involuntary fertility. The best way for adolescents to avoid unwanted pregnancies is to abstain from sexual intercourse. However, if one is sexually active the best way is to seek medical attention and get advice on the most suitable contraceptive. Forms of planning include correct and consistent use of condoms (male or female), Intra uterine device (loop), injectables (Depo-Provera), implants (jadelle) emergency hormonal contraception (morning after pill), Lactational amenorrhea (breast feeding), vasectomy, tubal ligation, rhythm/ calendar method, withdrawal (coitus).

Contraception

The term contraceptive has been defined by the Medical Dictionary (2008) as a form of birth control which prevents pregnancy by interfering with the normal process of ovulation, fertilisation and implantation. Contraceptives serve to prevent pregnancy.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/pregnancy%2FPregnancy%20Prevention%20.png?alt=media&token=c2f29b54-173b-4f74-b684-34a3babba3f4",
                'category_id' => 5,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 47,
                'country_code' => 'ZW',
                'title' => "Risks Associated With Adolescent Unwanted Pregnancies",
                'description' => "Child bearing at an early age greatly reduces women’s educational and employment opportunities and is associated with higher levels of fertility (ASRH Strategy 11, 2016). This leads to vicious cycles of poverty for most adolescent girls and young women who find themselves suddenly with no safety net to fall back on.

Usually there is a disparity between the actual gestational age as recorded by the scan and the actual time of conception when the female egg was fertilized. More often than not this causes quarrels between young couples with questions of paternity being raised. End result is usually the male figure distancing himself from any claim of paternity leaving the young female stranded.

Medical complications may arise for girls due to the fact that their bodies are not yet fully prepared for childbearing. No medication (not even a non-prescription drug) should be taken except under medical supervision, since it could pass from the mother through the placenta to the developing baby. Some drugs, called teratogens, have been proven harmful to a foetus, but no drug should be considered completely safe (especially during early pregnancy). Drugs taken during the first three months of a pregnancy may interfere with the normal formation of the baby's organs, leading to birth defects. Drugs taken later on in pregnancy may slow the baby's growth rate, or they may damage specific foetal tissue (such as the developing teeth) or cause preterm birth.

More often than not, young women who find themselves pregnant try backdoor abortion. This is whereby they use unscrupulous and unsterilized objects such as coat hangers, scrap metals and medically unverified herbs. These cause complications such as over bleeding, inability to conceive later on in life and at times even death. The Termination of Pregnancy act (15:30) in Zimbabwe prohibits any form of abortion unless if it endangers the life of the woman or her physical health or there is evidence that the baby will be seriously impaired. The other exception is in the case of rape and the pregnancy can only be terminated after presentation of a certificate from the jurisdiction the crime was committed.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/pregnancy%2FRisks%20associated%20with%20adolescent%20unwanted%20pregnancies%20.png?alt=media&token=e3abd435-5e01-4a0e-91f1-08d1935f46ba",
                'category_id' => 5,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 48,
                'country_code' => 'ZW',
                'title' => "What is Pregnancy?",
                'description' => "Pregnancy is the period from conception to birth. The egg is fertilized by a sperm and then implanted in the lining of the uterus where it develops into the placenta and embryo, and later into a foetus. Pregnancy usually lasts 40 weeks, beginning from the first day of the woman's last menstrual period, and is divided into three trimesters, each lasting three months.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/pregnancy%2FWhat%20is%20pregnancy.png?alt=media&token=08c49357-8781-4b96-b793-eefbfdd0efeb",
                'category_id' => 5,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 49,
                'country_code' => 'ZW',
                'title' => "What to do when you find yourself an adolescent and pregnant?",
                'description' => "The sooner a young woman accepts the fact that she is pregnant the better. Of course, family might get angry but it is because they always want the best. With time they will get over it and learn to accept the baby. One should not run away from home as this causes worry and flares tempers. It is better to find an adult family member you are close to like an aunt who will help you to break the news to the rest of the family. It is essential to seek antennal care (ANC) as soon as possible.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/pregnancy%2FWhat%20to%20do%20when%20you%20find%20yourself%20an%20adolescent%20and%20pregnant.png?alt=media&token=df339c0a-1ab6-4a95-8b70-40de68a39bd1",
                'category_id' => 5,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // Category: Relationships
            [
                'id' => 50,
                'country_code' => 'ZW',
                'title' => "7 Ways To Create Parent To Child Communication",
                'description' => "7 ways to create parent to child communication

1. Talk during the in-betweens.

What were you doing the last time you had a good conversation with your child? I know the answers: walking or driving to school, baking together, bath time, and, of course, bedtime. These times and activities loosen tongues because parent and child aren’t looking at each other. In fact, we are in parallel position. Most of us think talking is supposed to be about relating deeply, but kids actually open up in the middle of doing other things, during what I refer to as the “in-betweens” of life.

2. Create talking rituals.

Observe your child’s conversational style. You’ve heard about learning or attentional styles, but our kids have hard-wired conversational styles that don’t change much. One child may be a lively morning talker. Another is barely human before the bus arrives, but after school it’s no-holds-barred banter. One of your children likes a lot of back and forth, another needs to talk at a slower pace, a third can’t tolerate questions. The key to openness is to not change what is unchangeable, but instead to respect natural times and ways of talking. Build what I call “talking rituals” around them: 15 minutes of driving together or downtime side-by-side in the evening may be all you need to make that connection.

3. Be a person.

Respond to your child with real emotion. Don’t go over the top with reactions, but don’t be a therapist either. Nodding one’s head, naming feelings, and reflecting back is terrific when kids are extremely young or upset or sick or scared. But for the everyday tracking we need to stay in touch with their lives, it is far better to respond like an actual person. “Are you kidding me, Michael did what to Earnest?” “I love what you said to Jenny, it touches my heart.” After all, don’t genuine responses make you want to share more too?

4. Encourage emotional literacy.

Help your kids tell the story. We focus on academics, but our kids also need to be emotionally literate, able to tell a story from beginning to end. Problems are better solved when one can articulate them to another person and people find solutions together. I know, kids take so long to get to the point and schedules must be followed. But slow down for two minutes to ask action questions: “Who was there? What did they say? What happened next?” These help your child feel heard and show you are interested in the whole story. “Love is focused interest,” it has been said, and our kids can tell when we are interested in the story. As a 6-year-old said to me, “I want mom’s undivided attention.” “What do you mean, no siblings around?” “No,” she replied,” not thinking about 50 other things at once.”

5. Details matter.

Pay attention to the superficial. “You lost quarters under the vending machine. What year were they?” often leads to the real scoop. “I was at the vending machine because I didn’t think anyone would talk to me at lunch.” The trivial is where kids live; they get scared off when we delve for deeper feelings, as in “How did that make you feel?” So, commit to the superficial, and more often than not the trivial will lead to what’s really going on.

6. You count, too.

This is big in our child-centered world. Talk about yourself if you want your kids to talk about themselves. Next time at dinner, spend a few moments opening up about your day. Your child will interrupt, and I guarantee you won’t get to the end of the story. The reason it’s such a conversation trigger is that when you talk about yourself it reminds kids about things in their distant memory three hours earlier. For example, if you say, “I had an argument with one of my friends at work,” your child might well respond, “I had a fight with Jenny during gym.” And a special note about dinnertime: grill the food not your kids. Endless queries such as “How was school?” are conversation-busters. As one pre-teen told me, “It feels like I have to produce all over again at dinner.”

7. Give advice.

It’s hard to believe, but our precocious 21st Century kids of all ages still crave direction. After the story, after you’ve responded, then discuss together how your child might handle the situation differently next time. Ask for her ideas, and don’t be afraid to give yours. Try not to lecture, and pay attention to those subtle signals of going on too long. Keep it short, and use your life-wisdom to guide. Begin with, “I know my experience isn’t anything like yours, it’s very different now,” since even young children need to feel separate enough to discover what works. Powerful advice means recognizing your own limits to help kids make decisions without you. Tell them, “I can’t be there to make the decision about sharing that toy or sharing that secret with Joanne, but here’s what I think will happen.” When children know where you stand, they feel closer to you and more willing to open up.



Talk about love and help teens understand the differences between mature love and other forms of intense attraction. Regardless of their own relationships successes and failures, all adults can distill their wisdom and share it in age-appropriate ways with teens and young adults. They can also explore with teens and young adults questions at the core of learning how to love and develop healthy relationships. For example, what is the difference between infatuation, intoxication and love?

Guide young people in identifying healthy and unhealthy relationships. Adults can ask questions that help teens identify the markers of healthy and unhealthy relationships, and can explore with them examples of each in their own lives and in the media. One important marker is whether a romantic relationship makes both partners more respectful, compassionate, generative, hopeful.

Go beyond platitudes. Important as it is to tell young people to “be respectful,” many teens don’t know what this actually means in different romantic and sexual situations. Adults need to identify for teens common forms of misogyny and harassment, such as catcalling or using gender-based slurs, and they need to talk to teens specifically about what respect and care concretely mean in any type of romantic relationship.

Step in. When parents and other adults witness degrading, sexualized words or behaviour, it’s imperative that they intervene. Silence can be understood as permission. Adults need to talk much more with each other and with school counsellors and other experts about what types of interventions are likely to be effective and try out various approaches. It’s often important in school and community settings to enlist teens and young people themselves in preventing these behaviours.

Talk about what it means to be an ethical person. Helping young people develop the skills to maintain caring romantic relationships and treat those of different genders with dignity and respect can also help strengthen their ability to develop caring, responsible relationships at every stage of their lives and to grow into ethical adults, community members, and citizens. It’s important for adults to connect discussion with teens and young adults about romantic and sexual relationships and misogyny and harassment to  ethical questions about their obligation to treat others with dignity and respect, intervene when others are at risk of being harmed, and advocate for those who are vulnerable.

 ",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/relationships%2F7%20ways%20to%20create%20parent%20to%20child%20communication%20.png?alt=media&token=843608a1-9091-49df-b875-cb978da788b3",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 51,
                'country_code' => 'ZW',
                'title' => "Importance Of Families ",
                'description' => "The sensation of fear exists in every single human; every one of us must feel secure. A family will provide one with protection. The strength of the family members is not important; a nuclear family or maybe a joint family offers you a feeling of being secure. It is because you realize that your family is going to stand by you, regardless of what.

2. They love and understand you.

Just like the basic requirements, a human also has several emotional needs, the gratification of which is essential for mental as well as physical happiness. Everyone requires affection, understanding, feeling of belonging, love, and so forth. Families are important because they provide us with love, laughter and a sense of community.

Your family understands your habits and knows the trials that you have been through throughout your life. Of course, sometimes your mannerisms can provide a little entertainment for the other members of the family as well!

3. Protects from external influences.

Peer pressure might have a substantial impact on teenagers and adults alike. When individuals try to get other folks to perform things which aren’t morally correct, they make an effort to penetrate the family values. This means, if somebody possesses a strong perception of what is correct and what is wrong due to the values they had been raised with, they are more unlikely to become sufferers of deviant influences.

4. Giving earth a center!

No matter where you roam, you always know that you have a home to go back to – your family home. That means that you are never alone in the world, and always have somewhere to go whatever happens. Sometimes this sense of home is legally and financially cemented with shared (joint) ownership of the house.

5. Helps to raise a child.

Family play an important role in the raising of the child. Your loved ones can assist you to raise a child. In case you are in close contact with your household, it will be much easier for you to aid your kid to grow up healthy and happy. You will not just have a couple of people taking care of your child; you will have lots of people. Your family members will take proper care of your kid when you are sick or away, and assist you to cope with your youngster while things are tough. Whilst raising children is never simple, having powerful family relationships makes it a whole lot simpler.

6. Aids to make decisions.

Family values affect the decisions individuals make both in the family structure and also outside. Deciding about crucial topics can be challenging, and people might feel helpless if they are clueless which way to proceed. Consequently, having strong family values aids individuals to make the correct decisions in life.

7. They help to make you who you are.

Whether by providing you with your first steps in education (like learning to read and write) or instilling you with moral values, your family can shape your personality and beliefs for many years ahead. Many people say that the kind and wise words of their family helped to make them a better human being.

 ",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/relationships%2FIMPORTANCE%20OF%20FAMILIES%20.png?alt=media&token=bfb50a16-2538-4feb-9be8-baaa58e1d052",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 52,
                'country_code' => 'ZW',
                'title' => "Importance Of Parent To Child Communication ",
                'description' => "When young people feel unconnected to home, family, and school, they may become involved in activities that put their health and well-being at risk. However, when parents affirm the value of their children, young people more often develop positive, healthy attitudes about themselves. Although most adults want young people to know about abstinence, contraception, and how to prevent HIV and other sexually transmitted diseases (STDs), parents often have difficulty communicating about sexuality. Nevertheless, communicating about sexuality is important—positive communication between parents and their children greatly helps young people to establish individual values and to make healthy decisions",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/relationships%2FImportance%20of%20parent%20to%20child%20communication%20.png?alt=media&token=ebce1f26-5851-49c6-8aa2-9db3dcff23fa",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 53,
                'country_code' => 'ZW',
                'title' => "Parent To Child Communication ",
                'description' => "Life for teenagers of today are no longer the same as those of the 20th century. Let’s face it, google, YouTube, Facebook, WhatsApp, Instagram are all just a click away in the hand a teenager. Correct and wrong information all surround young people of today. This is one reason it is important that you talk to that young person about growing up. It takes skill to create open and respectful relationships. Heaping your moral values on a young poison before understanding their reality is just but one quick way of creating a puppet. A young person can tell you what you want to hear- far from their reality. Save yourself some heartache and get talking by looking at the following. ",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/relationships%2FPARENT%20TO%20CHILD%20COMMUNICATION%20.png?alt=media&token=a14c6d98-d32e-418c-9264-83f89aff8517",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 54,
                'country_code' => 'ZW',
                'title' => "PARENTING - What are the 10 principles of good parenting?",
                'description' => "PARENTING - What are the 10 principles of good parenting?



1. What you do matters. Whether it's your own health behaviors or the way you treat other people, your children are learning from what you do. \"This is one of the most important principles, \"Steinberg explains.\"What you do makes a difference...Don't just react on the spur of the moment. Ask yourself, What do I want to accomplish, and is this likely to produce that result?\"



2. You cannot be too loving. \"It is simply not possible to spoil a child with love,\" Steinberg writes. \"What we often think of as the product of spoiling a child is never the result of showing a child too much love. It is usually the consequence of giving a child things in place of love -- things like leniency, lowered expectations, or material possessions.\"



3. Be involved in your child's life. \"Being an involved parent takes time and is hard work, and it often means rethinking and rearranging your priorities. It frequently means sacrificing what you want to do for what your child needs to do. Be there mentally as well as physically.\"



Being involved does not mean doing a child's homework -- or correcting it. \"Homework is a tool for teachers to know whether the child is learning or not,\" Steinberg says. \"If you do the homework, you're not letting the teacher know what the child is learning.\"



4. Adapt your parenting to fit your child. Keep pace with your child's development. Your child is growing up. Consider how age is affecting the child's behaviour.



\"The same drive for independence that is making your 3-year-old say 'no' all the time is what's motivating him to be toilet trained,\" writes Steinberg. \"The same intellectual growth spurt that is making your 13-year-old curious and inquisitive in the classroom also is making her argumentative at the dinner table.\"



5. Establish and set rules. \"If you don't manage your child's behaviour when he is young, he will have a hard time learning how to manage himself when he is older and you aren't around. Any time of the day or night, you should always be able to answer these three questions: Where is my child? Who is with my child? What is my child doing? The rules your child has learned from you are going to shape the rules he applies to himself.



\"But you can't micromanage your child,\" Steinberg notes. \"Once they're in middle school, you need to let the child do their own homework, make their own choices and not intervene.\"



6. Foster your child's independence. \"Setting limits helps your child develop a sense of self-control. Encouraging independence helps her develop a sense of self-direction. To be successful in life, she's going to need both.\"



It's normal for children to push for autonomy, says Steinberg. \"Many parents mistakenly equate their child's independence with rebelliousness or disobedience. Children push for independence because it is part of human nature to want to feel in control rather than to feel controlled by someone else.\"



7. Be consistent. \"If your rules vary from day to day in an unpredictable fashion or if you enforce them only intermittently, your child's misbehaviour is your fault, not his. Your most important disciplinary tool is consistency. Identify your non-negotiables. The more your authority is based on wisdom and not on power, the less your child will challenge it.\"



8. Avoid harsh discipline. Parents should never hit a child, under any circumstances, Steinberg says. \"Children who are spanked, hit, or slapped are more prone to fighting with other children,\" he writes. \"They are more likely to be bullies and more likely to use aggression to solve disputes with others.\"



\"There are many other ways to discipline a child -- including 'time out' -- which work better and do not involve aggression.\"



9. Explain your rules and decisions. \"Good parents have expectations they want their child to live up to,\" he writes. \"Generally, parents overexplain to young children and underexplain to adolescents. What is obvious to you may not be evident to a 12-year-old. He doesn't have the priorities, judgment, or experience that you have.\"



10. Treat your child with respect. \"The best way to get respectful treatment from your child is to treat him respectfully,\" Steinberg writes. \"You should give your child the same courtesies you would give to anyone else. Speak to him politely. Respect his opinion. Pay attention when he is speaking to you. Treat him kindly. Try to please him when you can. Children treat others the way their parents treat them. Your relationship with your child is the foundation for her relationships with others.\"



For example, if your child is a picky eater: \"I personally don't think parents should make a big deal about eating,\" Steinberg says. \"Children develop food preferences. They often go through them in stages. You don't want to turn mealtimes into unpleasant occasions. Just don't make the mistake of substituting unhealthy foods. If you don't keep junk food in the house, they won't eat it.\"
",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/relationships%2FPARENTING%20-%20What%20are%20the%2010%20principles%20of%20good%20parenting.png?alt=media&token=f7dd93f8-6bb0-4b8b-b1bf-2fc2ddb8aeaf",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 56,
                'country_code' => 'ZW',
                'title' => "Types Of Families ",
                'description' => "Nuclear Family

The nuclear family is the traditional type of family structure. This family type consists of two parents and children. The nuclear family was long held in esteem by society as being the ideal in which to raise children.

Single Parent Family

The single parent family consists of one parent raising one or more children on his own. Often, a single parent family is a mother with her children, although there are single fathers as well.



Extended Family

The extended family structure consists of two or more adults who are related, either by blood or marriage, living in the same home. This family includes many relatives living together and working toward common goals, such as raising the children and keeping up with the household duties. Many extended families include cousins, aunts or uncles and grandparents living together. This type of family structure may form due to financial difficulties or because older relatives are unable to care for themselves alone. Extended families are becoming increasingly common all over the world.



Childless Family

While most people think of family as including children, there are couples who either cannot or choose not to have children.

Step Family

Over half of all marriages end in divorce, and many of these individuals choose to get remarried. This creates the step or blended family which involves two separate families merging into one new unit. It consists of a new husband and wife and their children from previous marriages or relationships.

Grandparent Family

Many grandparents today are raising their grandchildren for a variety of reasons.. This could be due to parents' death, addiction, abandonment or being unfit parents. Many grandparents need to go back to work or find additional sources of income to help raise their grandchildren.
",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/relationships%2FTYPES%20OF%20FAMILIES%20.png?alt=media&token=b7a50fe2-63d3-428a-8df4-905b822746c7",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 57,
                'country_code' => 'ZW',
                'title' => "What is a Relationship ?",
                'description' => "Human beings are not social islands. You cannot exist on your own and neither can I. we all need relationships to be healthy. However, a healthy relationship is not automatic, it takes effort from two or more people involved. Even with your good intentions for that relationship it doesn’t automatically transform into a healthy relationship. Relationships of all types, are made up of people with different motives, values, beliefs and attitudes that can either threaten or sustain a relationship. A happy life is made of healthy relationships we are going to explore!. ",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/relationships%2FWhat%20is%20a%20Relationship.png?alt=media&token=fd984c31-a97f-4d62-af07-ae056149ee0a",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // Category: SexTalk
            [
                'id' => 58,
                'country_code' => 'ZW',
                'title' => "ASRH Needs For Adolescents Living With HIV",
                'description' => "ASRH Needs for Adolescent living with HIV
- HIV testing and counselling
- Issues of parents/guardian consent and confidentiality.
- Beneficial disclosure and continued counselling
- ART – use of the Tanner Scale to determine whether adolescent receives paediatric dose of ARVs or adult dose.
- Monitoring and management of side effects
- Drug adherence
- Relationships and disclosure
- Pregnancy, antenatal care, labour and delivery, postnatal care and infant feeding – (EMTCT).
- Post abortion care
- Contraception especially dual contraception
- Psychosocial support – siblings, parent/guardians, peers, treatment buddy and support groups
- Referral to support systems (e.g. support groups especially those led by peers who have successfully implemented and adhered to ART themselves)
- Access to information

The Relationship between STIs and HIV
Concentrating on the prevention and treatment of STIs, rather than just focusing on HIV infection and AIDS, has a number of advantages:
a. Infection with other STIs, in particular those that cause sores in or around the sexual parts, makes it easier for a person to get HIV.
b. HIV affects the response to treatment of STIs (making them difficult to treat and slow to heal).
HIV changes the signs of some STIs making it difficult to identify them.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FASRH%20Needs%20For%20Adolescents%20Living%20With%20HIV.png?alt=media&token=de20ffb0-3175-4708-a50d-38beac06b804",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 59,
                'country_code' => 'ZW',
                'title' => "Abortion & Post  Abortion Care",
                'description' => "Termination of pregnancy before the foetus can have independent existence (viability)
2 broad types:
1. Spontaneous abortion [miscarriage] which follows some pathological condition in either the woman or the conceptus.
2. Induced abortion: intentional termination of the pregnancy by the woman or another person. May be either “safe” or “unsafe”.

Trimester
- 1st trimester – up to 12 weeks gestation (weeks of pregnancy)
- 2nd trimester – from 13 to 28 weeks
- 3rd trimester – from 29 to 40 weeks

 Post Abortion Complication (PAC) Care
May include the following five elements:
- Treatment of incomplete and unsafe abortion and complications
- Counselling to identify and respond to women’s emotional and physical health needs
- Contraceptive and family-planning services to help women prevent future unwanted pregnancies and abortions
- Reproductive and other health services that are preferably provided on-site or via referrals to other accessible facilities
- Community and service-provider partnerships to prevent unwanted pregnancies and unsafe abortions, to mobilize resources to ensure timely care for abortion complications, and to make sure health services meet community expectations and needs

Abortion is only legal under limited circumstances in Zimbabwe under the Termination of Pregnancy Act of 1977:
	– When the life or physical health of the woman is endangered
	– When the child may suffer a permanent physical or mental defect
When the fetus was conceived as a result of rape or incest",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FAbortion%20and%20Post%20natal%20Care..png?alt=media&token=64cd5a29-9263-40f9-acdd-14d8b48e6f09",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 60,
                'country_code' => 'ZW',
                'title' => "Adolescent Fertility",
                'description' => "What is Antenatal Care (ANC?)
Antenatal care is the care given to a pregnant woman from the time conception is confirmed until the beginning of labour.
Aim of Antenatal care
The aim of antenatal care is to monitor the progress of pregnancy to optimize maternal and fatal health. Therefore the midwife or health service provider critically evaluates the physical, psychological and sociological effects of pregnancy on the woman and her family.
Registering for Antenatal care
Pregnant women are supposed to access antenatal care ideally by 12 weeks’ gestation. The first booking is defined as the initial assessment.

Objectives or benefits of early booking
- To assess health by taking a detailed history and offering appropriate screening test.
- To ascertain baseline recordings of blood pressure, urinalysis, blood values, uterine growth and foetal development to be used as a standard for comparison as the pregnancy progress.
- To identify risk factors by taking accurate details of past and present midwifery, obstetric, medical, family and personal progresses.
- To give public health advice pertaining to pregnancy in order to maintain the health of the mother and foetus.
- To make appropriate referral where additional healthcare or support needs have been identified.
Facial Care:
Blackheads occur when the adolescents’ glands produce extra oil that clogs pores in the skin. If blackheads are not removed, oil continues to back up in the oil gland below the pore, causing pressure and inflammation. If germs get into the pore, pimples can develop. Teens who have blackheads often find help from using a mild soap. Keeping the skin clean and free of excess oil is the",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FAdolescent%20Fertility..png?alt=media&token=0930c5dd-af9a-433a-a8c4-01b7e0e4f10d",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 61,
                'country_code' => 'ZW',
                'title' => "Anal Sex",
                'description' => "Anal Sex: What is Anal Sex?
Anal sex or anal intercourse is generally the insertion and thrusting of the erect penis into a person's (male/female) anus, and or rectum, for sexual pleasure

Anal sex can hurt if you're not relaxed and don't use lubricant. The anus doesn't make its own lubrication like the vagina does, so using lube helps the penis (or a sex toy) go in the anus easier and keeps the condom from breaking.

Can I get HIV through Anal Sex?
The risk of getting an STI like HIV (the virus that causes AIDS) is even higher with anal sex than vaginal sex. That's because the lining of the rectum is thin and can tear easily, allowing infection to get into your body.

If you decide to have anal sex, use a condom every time. Because there is less lubrication with anal sex, condoms are more likely to break than with vaginal sex, so use a lot of water-based lubricating gel (available from pharmacies).",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FAnal%20Sex..png?alt=media&token=dce99ad4-93cd-4723-b5c4-82c443a9ec92",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 62,
                'country_code' => 'ZW',
                'title' => "Contraceptives",
                'description' => "REASONS ADOLESCENTS MAY FIND CONTRACEPTIVES NECESSARY

	- To avoid unintended pregnancies
	- To avoid unsafe abortion.
	- To avoid sexually transmitted infections (STIs) including HIV.

Types of Contraception or Family Planning

	- Abstinence
	- Condom (male & female) prevents both STIs and pregnancy
	- Combined pill
	- Progestogen only pill (prevents pregnancy only)
	- Intra-uterine device (IUD)
	- Implants (Jadelle)

Where can Adolescents get Contraceptives

	- Clinics/hospitals
	- Pharmacies
	- Private doctors/nurses/midwives
	- Family planning centers
	- Youth centers Community-Based- Distributors
	- Supermarkets
	- Village Health Workers
",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FContraceptionb.png?alt=media&token=2e128374-86e3-4ec0-9974-10f0ff30c7f1",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 63,
                'country_code' => 'ZW',
                'title' => "Is It To Be Expected That All Virgins Bleed During Their First Time",
                'description' => "No, not always. Some women will bleed after having sex for the first time, while others won't. Both are perfectly normal. A woman may bleed when she has penetrative sex for the first time because of her hymen breaking.



The hymen is a thin piece of skin that partially covers the entrance to the vagina. It usually breaks during sex, if it hasn't already broken before.



The hymen can break quite easily before a woman has sex for the first time, through: activities such as horse riding and other sports using tampons. A woman may not know her hymen has broken, because it doesn’t always cause pain or noticeable bleeding.



Having a broken hymen therefore doesn't necessarily mean a woman has lost her virginity. If you're concerned about bleeding after sex, get advice from your GP or your nearest sexual health clinic.   ",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FDo%20All%20Virgins%20Bleed%20During%20Their%20First%20Time.png?alt=media&token=f38c78ca-34aa-4d16-ac9b-201927b2b822",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 64,
                'country_code' => 'ZW',
                'title' => "Do You Talk About Sex With Your Parents?",
                'description' => "Do you talk about sex with your parents?
Lots of teens talk with their parents about sex. If you feel safe talking with your parents about sex, do it. Sure, it can be a little embarrassing, but it's definitely worth starting the conversation. Your parents (or other adults you trust) can offer great information and advice.
One way to avoid awkwardness is to ask your parents what their values are when it comes to sex. This takes the pressure off of you to do all the talking and shows them that you respect their opinions.
Asking them questions about what it was like when they were your age is a great way to learn, get their trust, and even hear some stories from their past. You can also try using something from a TV show or a movie to start the conversation. Your parents will probably really appreciate you being open with them. They may even be relieved that you brought it up!
Do my parents need to be involved when I make decisions about sex?
Decisions about sex are very personal and private, but there are some good reasons to involve your parents. Your parents:
- Might have good advice on whether you should start or continue a sexual relationship, based on a ton of life experience.
- Could suggest ways to help prevent pregnancy and STDs. They could even go with you to get tested, get birth control, or the HPV vaccine. Their health insurance might cover the cost of your doctor’s visit.
If you decide you can’t involve your parents in your decisions about sex, you can still take care of your health. Most states have laws that let teens get STD testing and birth control without their parents. You can also check with your local Planned Parenthood health center to see if they can give you free or low-cost health care, without using your parents’ insurance. Some states have special programs that help teens get their own private health insurance plan for sexual health services",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FDo%20You%20Talk%20About%20Sex%20With%20Your%20Parents.png?alt=media&token=99709538-ab8a-43d8-b9ca-0fe18dbe6f3f",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 65,
                'country_code' => 'ZW',
                'title' => "HIV & AIDS",
                'description' => "HIV (Human Immunodeficiency Virus) is the virus that causes AIDS. It attacks the immune system – the body’s defence against disease. HIV is found in blood, breast milk, semen and vaginal fluids.

AIDS (Acquired Immuno Deficiency Syndrome) is the name given to a group of illnesses in HIV positive people. These are illnesses that arise when People Living with HIV are no longer able to fight off infection because of lowered immunity.
AIDS has no cure.

Modes of Transmission of HIV
- Through unprotected sexual intercourse with an infected person.
- Mother-to-Child Transmission - From an HIV infected mother to the unborn baby during pregnancy, labour and delivery, and breastfeeding.
- By use of infected needles, razor blades and other skin-piercing instruments which are not cleaned properly or sterilised.
- Through a blood transfusion from infected blood. However, in Zimbabwe blood is screened for HIV and the risk is minimal.

Prevention: The spread of HIV infection can be prevented by:
- Abstaining from sex.
- Having one mutually faithful uninfected partner.
- Correct and consistent use of condoms all the time during sexual intercourse
- Avoiding the use of or sharing of unsterilized needles and syringes.

The HIV virus CANNOT be spread through kissing and hugging; sharing cutlery; sharing the same toilet and baths; sitting together; working together; living in the same house; shaking hands; talking, sneezing or coughing nor mosquito and other insect bites. However, persons caring for people living with HIV at home need information to protect themselves.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FHIV.png?alt=media&token=3824054f-82a6-41ba-93e3-86e20638d586",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 66,
                'country_code' => 'ZW',
                'title' => "HIV Testing Services (HTS)",
                'description' => "HIV Testing Services - is an entry point to prevention, treatment, care and support. It allows clients to make informed decisions.
An HIV prevention intervention normally initiated by the client and entered by the client’s free will.  It is the opportunity for the client to confidentially expose and understand his or her HIV risks and to learn his or her HIV status.  HTS helps clients to make informed decisions.
All HIV testing services should be provided within WHO's essential 5Cs: Consent, Confidentiality, Counselling, Correct test results and Connection (linkage to prevention, care and treatment)

This includes pre-test information, post-test counselling, linkage to appropriate HIV prevention, care and treatment services and other clinical and support services, quality HIV testing, accurate test results and diagnosis, and coordination with laboratory services to support quality assurance.
HTS approaches include:
	- Voluntary Counselling and Testing (VCT) - initiated by the client at his own free will
	- Provider Initiated Testing and Counselling (PITC) - Provider initiated testing, but clients have to give their consent before testing.

Indications of HTS
- Anyone who wants to know their HIV status.
- Anyone with a chronic condition not responding to Post Test Counselling
- Anyone with repeated infections.
- Those referred by their doctors or relatives.
- As a requirement for insurance or employment.
- Compulsory for sexual offenders.
- Following accidental needle prick for health providers, etc.

Creating a Referral Network
- The client should be informed about other services in the community which offer further counselling.
- If the client is positive, should be referred to AIDS support groups for further counselling and support.
- Trainers to be knowledgeable on AIDS policy and home based care policy and discharge policy.

Accepting and Coping with HIV Status
- Support – should come from family, social groups, fellowshipping, peer – HIV Positive
- Living positively – clients should get adequate nutrition, clean water, counselling to reduce stress.
- Risk education – clients should be educated on behaviour change, disclosure of status, HTS, use of condoms.
- Create awareness on the programme.
- Counsel pregnant mothers on HTS to help them have options of breastfeeding.
- Creating awareness on availability of anti-retroviral drugs and their significance on the prevention of parent to child transmission of HIV/AIDS.
Promotion of safe motherhood i.e. pregnant youths to attend antenatal care at health institutions.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FHTS..png?alt=media&token=61e714a3-9d92-4f46-9652-b8efa3e09d4d",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 67,
                'country_code' => 'ZW',
                'title' => "How To Do A Pregnancy Test",
                'description' => "Home pregnancy tests work by detecting the presence of the hormone hCG (human chorionic gonadotropin) in a woman's urine. Known as the pregnancy hormone, hCG is only found in pregnant women. Home pregnancy tests are available at most pharmacies and local clinics.
Before Taking the Test
Purchase a home pregnancy test. . When purchasing a pregnancy test, check the expiration date on the box and ensure the box is fully intact, with no wear and tear, as this could affect your result.
Figure out when to take the test.
Prepare yourself. Taking a home pregnancy can be a nerve-wracking experience, particularly when you're anxiously hoping for one result or the other. Take the test privately and give yourself as much time as you need, or have your partner or a close friend stand outside the bathroom door to talk you through it.
Ready, set, go! Sit on the toilet and urinate either on the testing stick or into the small plastic cup provided, depending on the type of test. You should try to use a midstream sample, which means you should pee a little first before you collect any urine in the cup or insert the stick.
Wait the stated amount of time. Place the testing stick on a clean, level surface with the result window facing up. Wait time is typically between 1 to 5 minutes, though some tests may take up to 10 minutes to give an accurate result. See the instructions to find out the required amount of time for your particular test.
Check the results. Once the amount of time stated in the instructions has passed, check the test stick for results. T
If the results are negative: Wait another week and if you still haven't started your period you should do the test again. False negatives are fairly common, especially if you miscalculated your ovulation date and took the test too soon. ",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2Fst.png?alt=media&token=fb7a2f67-f9ad-4fba-b241-586c723ccb23",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 68,
                'country_code' => 'ZW',
                'title' => "How To Prevent Date Rape",
                'description' => "Whether you're going on a date with a friend or a stranger, it's wise to take preventative steps against sexual assault. While nobody but the perpetrator can \"prevent\" assault, there are a few precautions you can take to make yourself safer. While you're on a date, check in with friends, stay relatively sober, and observe your date to see if they respect you. If you do decide to have a sexual encounter, make sure you both give enthusiastic affirmative consent.
Taking Basic Safety Precautions
Meet in public. Even if you and your date are well acquainted, you should go out in public places. Meet in a place you can get to and from by yourself without their help, in case you need to leave without them. Never agree to a first date at a private house or at a remote location.
If you have never met someone before, try meeting up sober in a public place, like a café or a restaurant, to talk before you go on a date.
Go on your own. Have a way to get to and from your date on your own. Know all the addresses of where you will go. You can drive yourself if you think you will be sober, but have a backup plan in case you end up drunk or disoriented. You can:
- Get a taxi app on your phone
- Ask a friend to pick you up at a certain time
- Meet somewhere easily accessed by public transportation, and have your routes planned out.
- Stay in touch with friends. Tell someone you trust where you are going on your date. Ask them to call or text you an hour or two into your date. Make sure you keep your phone on you so you can text if you are in a frightening situation.
- Plan to meet up with friends later if it's a first date.
- Let them know where you will be so they can come find you if they can't get in touch with you.
- Make sure you have a friend who will be sober and attentive enough to be in charge of ensuring you are safe.
- Don't accept open drinks. Drinks with open tops, or drinks from punch bowls, may have been drugged. Opt for beer that you can open yourself, or drinks that you can watch a bartender prepare. If your date offers you an open drink and you feel unsafe refusing it, take it politely and dispose of it discretely.
- Watch your glass. If anyone passes a hand over it, don't drink it.
Go home if you feel confused or inebriated. If you are on a date and you begin to feel unexpectedly drunk, high, or disoriented, get out of the situation. Contact a friend, waiter, or bartender and ask for help getting home. Don't go anywhere alone with your date. Signs of being drugged include:
- Unexpected drunkenness
- Wooziness or drowsiness
- Mental confusion
- Hallucinations
- Difficulty speaking
- Loose and uncoordinated movements
- Gaps in your memory
- Nausea
- Vomiting
- Seizures
Check your gut sense. If you are feeling uneasy, end the date. There's no reason to stay on a date with someone who doesn't feel safe to you, and there may be a very good reason to leave. If the person seems unstable, violent, or just makes you uncomfortable, don't stay just to be polite. Make a simple excuse and get out.
You can say, \"I'm sorry, but I'm not feeling well. I've texted my roommate she's coming to pick me up.\"
Defending Yourself against Problem Behavior
Notice if your date pressures or manipulates you. A good date takes you at your word. They don't push you to do things you don't want to do. Watch out for people who insist, who whine, or who relentlessly tease you when you go against them. If your date puts you down, even as a joke, they may be trying to manipulate you. If you are being disregarded, condescended to, or otherwise not treated as an equal, end the date and get out safely.
Someone who flatters and pampers you might also be trying to manipulate you. If it feels like the praise comes only when you comply with their wishes, and dries up when you speak up for yourself, distrust them.
This is not to say that anyone who treats you well is safe. People you trust can be perpetrators of sexual assault.
Distrust anyone who is trying to get you drunk. If you are going slowly and your date keeps upping the game, put the brakes on. Someone who doesn't respect your pace is someone who doesn't care about your safety.
Be unambiguous when you say \"No.\" If your date asks you to do something you don't want to do, say no calmly and clearly. Say only what is true, and don't offer extra details. It's not your job to make them feel better. It's important that they hear that you are not afraid to say \"no.\"
You might say, \"I'm going to go home now.\" If they press, just say that you're sure, and that you're not interested in being convinced otherwise.
Set boundaries and consequences. If you are on a date with someone who keeps asking for something after you have said no, set a boundary with them. Explain what you need and what will happen if they ignore your need.
You might say, \"I already told you I don't want another drink. You are welcome to keep drinking, but if you keep trying to get me to drink what you ordered I will leave.\"
If your date ignores your boundary, stick to the consequence you set.
Establishing Consent with Your Date
Make sure you can both give consent. Before you engage in any sexual activity with your date, make sure you have both given consent. You can give consent if you are of age, if you are sober enough to make reasonable decisions, and if you feel safe.
People who are drugged or very drunk cannot consent to sex.
If your date is underage, they are not old enough to consent to sex.
Ask for consent as you go. When you want to get physical with your date, ask them if they'd like to. If you just move in on them without checking they might feel too frightened, pressured, or ashamed to say no. Ask for a \"yes\" instead. Not only is this the responsible thing to do—it's also the law in many states.
You can ask things like \"May I kiss you?\" \"Is this okay?\" or \"Would you like to do this?\"
Ask before you touch them, then continue to ask whenever the encounter escalates.
Communicate what you like and what you don't. If you are going to have sex, ask for specific details on what they like and do not like. Communicate your own preferences as well.
For instance, if you like roughhousing but don't like pressure on your neck, say so.
If they tell you they don't want a certain kind of touch, respect that.
Check for verbal enthusiasm. Your date shouldn't just say yes—they should sound like they mean it. Silence, \"maybe,\" and even a \"yes\" that sounds uncertain or insincere are bad signs. If you aren't sure your date is into it, don't continue.
If your date says \"yes\" and sounds sincere, that's consent.
If they urge you on, ask for consent to do more, and express pleasure, that's enthusiasm.
Look for nonverbal consent. If your date responds to your advances, returns your physical gestures, and also initiates contact, they're giving you nonverbal enthusiasm. Smiling, nodding, giving thumbs up signals, and making eye contact are all ways to give nonverbal consent.
Stop if either of you withdraws consent. If your date stops responding to your advances, pause and ask what's happening. If they can't tell you and show you that they are happy with the encounter, end it.
You can also withdraw consent at any moment. Say, \"Stop,\" and move away.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FHow%20To%20Prevent%20Date%20Rape.png?alt=media&token=f998c5ac-820a-4fe4-b353-9ff1eb54b822",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 69,
                'country_code' => 'ZW',
                'title' => "Is It Possible To Break Virginity Using A Condom",
                'description' => " Safety first for your first time

Don’t listen to people who say you can’t get an STD your first time – it’s a myth. Similarly, women are able to get pregnant even during their first experience. For these reasons, it’s essential that you wear protection each and every time you have sex – even if you’ve never done it before. Wearing condoms will keep both you and your partner safe. ",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FIs%20It%20Possible%20To%20Break%20Virginity%20Using%20A%20Condom%20.png?alt=media&token=5178167b-7816-464f-9f79-f532cb3eb4aa",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 70,
                'country_code' => 'ZW',
                'title' => "Masturbation",
                'description' => "It’s totally normal to masturbate (touch yourself for sexual pleasure) whether you’re sexually active with other people or not. Masturbation even has health benefits, like reducing stress.
Why do young people masturbate?
People masturbate for different reasons — it helps them relax, they want to understand their body better, they want to release sexual tension, or their partner isn’t around. But most people masturbate because it feels good. Many people think that masturbation is only something you do when you don’t have a sex partner. But both single people and people in relationships masturbate.
Some people masturbate often, others rarely, and some people don’t masturbate at all. Different people masturbate in different ways, for different reasons. Masturbation is a totally personal decision, and there’s no “normal” way to go about it.
Is masturbation healthy?
You may have heard some crazy things about masturbation being bad for you, like it makes you grow hair in weird places; it causes infertility; it shrinks your genitals; or once you start masturbating you’ll become addicted to it. None of that’s true. Masturbation isn’t unhealthy or bad for you at all. Masturbation can actually be good for your health, both mentally and physically. And it’s pretty much the safest sex out there — there’s no risk of getting pregnant or getting an STI.
When you have an orgasm, your body releases endorphins, which are hormones that block pain and make you feel good. The good feelings that accompany an orgasm happen whether you’re by yourself or having sex with a partner.
Some researchers say Masturbation can:
		- release sexual tension
		- reduce stress
		- help you sleep better
		- improve your self-esteem and body image

Masturbation also helps you figure out what you like sexually. Where do you want to be touched? How much pressure feels good?
How much masturbation is too much?
Some people masturbate often — every day, or even more than once a day. Some people masturbate closer to once a week, once every few weeks, or every now and then. Some people never masturbate, and that’s fine too. All of these are perfectly normal.
Masturbation only becomes “too much” if it gets in the way of your job, your responsibilities, or your social life. If that’s a problem for you, you may want to talk to a counselor or therapist.
Is it OK to masturbate if you’re in a relationship?
Definitely. Lots of people in relationships masturbate. Masturbating when you’re in a relationship doesn’t mean your partner isn’t satisfying you. It’s a great way to figure out what you like and what makes you have an orgasm.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FMasterbastionn.png?alt=media&token=8ae095f2-ba41-4f80-9b82-2b089c9991f5",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 71,
                'country_code' => 'ZW',
                'title' => "Morning After Pill",
                'description' => "Emergency contraception, which is also called the “morning-after pill,” is a birth control measure  that, if taken after sexual intercourse, may prevent pregnancy.

If a woman has unprotected sexual intercourse or a condom breaks, she can take a regimen of pills within 72 hours that will prevent pregnancy.

Emergency contraception is sold in pharmacies. However, it is advised to try and use a condom as it is safer compared to the emergency contraception which if abused or taken more frequently can cause health complications.

Morning After Pill Effects
The most common side effects of the morning after pill, also known as the emergency contraceptive pill, are nausea and stomach cramps as well as changes to your period. Your next period may begin earlier or later and the bleeding may be lighter or heavier than usual.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FMorning%20After%20Pill.png?alt=media&token=7e5e701c-9806-4bcb-9e10-63591974f33e",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 72,
                'country_code' => 'ZW',
                'title' => "Opportunistic Infections",
                'description' => "Tuberculosis – is an opportunistic infection among people living with HIV and AIDS and is a major cause of death in this group.

- Gullian Bar’s Syndrome – This is paralysis of both lower limbs as a nervous disorder.  The condition starts from feet and spreads upwards, resulting on the individual patient being unable to walk and finally completely paralysed.

- Diarrhoea – Diarrhoea that is chronic and persistent or intermittent.  This condition results in loss of 10% or more of total body weight.

- Herpes Zoster – This is a nervous disorder.  The same virus that causes chicken pox is the one that causes herpes zoster.  The virus attacks a nerve and produces very painful shingles which may reoccur after healing.

- Karposi Sarcoma – This is a cancer of the skin.  It produces nodules and progresses fast and has no specific treatment.

- Cryptococcal Meningitis – This is a viral type of meningitis that usually infects the brain structures of an HIV positive person.  It presents with severe headaches, neck stiffness and confusion and in severe cases with convulsions and unconsciousness.

- Pneumonias – Including Pneumosist Carini Pneumonia (PCP) – This is a lung infection and is usually fatal in People living with HIV.

- Thrush – This can be vaginal or oral thrush and is caused by fungal infection called candida abicans. It causes painful white patches inside the mouth and throat or in women it causes mild vaginal discharge.

Factors Affecting Adolescent Exposure
STIs present a major threat to the health of sexually active adolescents.
	- Experimentation is a normal part of adolescent development, but it exposes them to risk
	- Adolescent boys often feel they have to prove themselves sexually active.
	- Adolescents’ sexual reactions are often unplanned, and sometimes, a result of coercion or force
Young girls are more vulnerable than young men because of biological factors, as well as social, cultural and economic factors.
These sexual relations often occur typically before they have adequate information about STIs and lack experience and skills on how to protect themselves. Some of the consequences of STIs in adolescents include:
	- Pelvic inflammatory disease
	- Infertility
	- Cancer of the cervix
Stigma and discrimination",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FMasterbastionn.png?alt=media&token=8ae095f2-ba41-4f80-9b82-2b089c9991f5",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 73,
                'country_code' => 'ZW',
                'title' => "PEP & PREP",
                'description' => "Post Exposure Prophylaxis (PEP)
Post-exposure prophylaxis (PEP) is short-term antiretroviral treatment to reduce the likelihood of HIV infection after potential exposure, either occupationally or through sexual intercourse. Within the health sector, PEP should be provided as part of a comprehensive universal precautions package that reduces staff exposure to infectious hazards at work.

NOTE: Please note that PEP is a specialized prevention service and is used only under certain conditions.
Pre-exposure Prophylaxis (PreP)

PrEP means - Pre-Exposure Prophylaxis, and it’s the use of anti-HIV medication that keeps HIV negative people from becoming infected.  PrEP is approved by the FDA and has been shown to be safe and effective. A single pill taken once daily, it is highly effective against HIV when taken every day. The medication interferes with HIV’s ability to copy itself in your body after you’ve been exposed. This prevents it from establishing an infection and making you sick.
It’s usually administered to people who are mostly at risk,
",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FPEP%20%26%20PREP.png?alt=media&token=f9ecf337-ee6d-4bde-8f6f-ed660e9023fb",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 74,
                'country_code' => 'ZW',
                'title' => "Pornography",
                'description' => "How does it affect sex health
Pornography (often abbreviated porn) is the portrayal of sexual subject matter for the purpose of sexual arousal. Pornography may be presented in a variety of media, including books, magazines, postcards, photographs, sculpture, drawing, painting, animation, sound recording, writing, film, video, and video games. The term applies to the depiction of the act rather than the act itself, and so does not include live exhibitions like sex shows and striptease. The primary subjects of present-day pornographic depictions are pornographic models, who pose for still photographs, and pornographic actors or porn stars, who perform in pornographic films.
The viewing of pornographic content and exposure to such material may influence young people to engage in sexual activities and intercourse at an early age due to the urge of wanting to try some of the things they see or read in pornographic material.
Production and or distribution of pornographic content is illegal in Zimbabwe.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FPornographyb.png?alt=media&token=5349b80e-63ec-41b6-99a6-99c799923bee",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 75,
                'country_code' => 'ZW',
                'title' => "Post Natal Care (PNC)",
                'description' => "Post Natal Care (PNC): It is a period which starts immediately after birth of the placenta and membranes and continues for 6 weeks. These three terms (Post-natal period, puerperium and postpartum) are used interchangeably.

A large proportion of maternal and neonatal deaths occur during the first 48 hours after delivery. Therefore, prompt postnatal care (PNC) is important for both the mother and the neonate to treat complications arising from the delivery as well as provide the mother with important information on how to care for herself and her child
Timing of postnatal care.
	- Timing starts from first hour up to 6 weeks
What does postnatal care involve?

	- PNC is likely to include the routine and specific clinical examination and observation of the mother and her baby.
	- Education and empowerment of mother and her immediate family.
	- Assist mother and family to establish infant feeding.
	- Dealing with specific postnatal conditions or complications
	- Early identification and treatment of infant postnatal conditions
	- Assist mother commence on contraceptive method of choice.
Offering cervical cancer screening.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FPost%20Natal%20Care%20(PNC).png?alt=media&token=834e7b46-402e-4622-aefd-1c59d5f6c413",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 76,
                'country_code' => 'ZW',
                'title' => "Sexual Behaviours",
                'description' => "Sexual Behaviours
These are acts done by people to gain sexual gratification or derive sexual pleasure. Sexual behaviour includes a wide range of activities, from kissing, touching, hugging, petting, and fondling to penetrative sexual intercourse.

NB: Some are approved in almost all cultures. Others may be culturally acceptable in one group or subgroup but not the other. For example, incest is unacceptable in Zimbabwe.

Sexual Expression
	1. The hormonal changes, which trigger sexual maturity also affect a young person’s emotions and feelings
	2. Some explore sexual feelings through erotic fantasies, masturbation or sexual intercourse
	3. Adolescents can be taught how to express their energy in constructive and socially accepted ways
	4. Sexual expression, like gender roles can be shaped buy culture, family and one’s personal value system
	5. Pre-marital sexual intercourse is frowned at in most societies
	6. Sexual intercourse within marriage among partners of any age is accepted
	7. Heterosexual expression between consenting adults is accepted in most societies
	8. Sexual energy can be expressed in friendship, the forging of kinship ties at and devotion to a person.

Some other forms of sexual expression are touching; composing poems; adoring the body; dancing; talking; and working hard to win the affection of a loved one. Sexual intercourse is but one form of sexual expression.

How Information, Communication and Technology (ICTs) Affect Adolescents Views on Sexuality
Access to the internet has made access to pornography (pictures, films, cartoons or writing) easy for adolescents, and it also makes pornography difficult to avoid.  Some adolescents may find pornography sexually exciting. Pornography only shows sexual images but it does not show how to protect oneself against pregnancy or STIs. Other ICTs that affect sexuality are sexual chat room talk, mobile phone texting- sexting and phone sex.

Strategies to deal with such Influences include: Avoiding websites with suspicious web addresses and do not click on pop-ups, not surfing for sites that offer pornography, blocking computers from showing pornography sites, adhering to age restrictions on television and adhering to illegality of pornography in Zimbabwe.
Adolescents may engage in pre-marital sex due to a number of factors that can influence that decision as listed below. However, there are some consequences that may emanate from such behaviours.
Adolescents may engage in pre-marital sex due to:
	- Peer pressure
	- Pressure from a partner
	- Sexual attraction
	- Inadequate sex education
	- Drugs and alcohol abuse
	- Inability to assert themselves
	- Loneliness
	- Coercion or force
	- Money or material support curiosity or experimentation
	- Desire to conform to popular images
	- Having no good reason to postpone intercourse

Consequences of Premarital Sex May be:
	- Unintended pregnancies
	- Sexually transmitted disease
	- Loss of self-esteem and self –respect
	- Lack of trust in the opposite sex
	- Fear of commitment to a partner
	- Difficulties in establishing intimacy in a relationship
	- Retardation of personal development
	- Infidelity in marriage

EFFECTS OF SEXUAL BEHAVIOURS ON ADOLESCENTS:
Effects of different forms of sexual behaviours on adolescents include damage to organs; spread of infections; strained relationships; sexual dissatisfaction; stigma; punishment by law and psychological trauma.

Adolescents can delay sexual debut through:
	- Socializing in groups
	- Planning exciting and public activities
	- Involving parents as elders in decision making
	- Setting limits on how far they go in expressing romantic affection
	- Avoiding sexually stimulating situations
	- Not using drugs and alcohol
	- Choosing friends who share their values
	- Not settling for less than they think they deserve in a relationship

Advantages of delaying sex are:
	- Gaining control over one’s life
	- Developing real friendship based on mutual respect
	- Time to develop one’s skill, talents and interest
	- Exploring a wider range of friendships and relationships
	- Building a firmer foundation for self-respect and self-control
Completion of education and achieving financial independence before marriage or parenting",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FPornographyb.png?alt=media&token=5349b80e-63ec-41b6-99a6-99c799923bee",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 77,
                'country_code' => 'ZW',
                'title' => "Sexually Transmitted Infections",
                'description' => "Sexually Transmitted Infections (STIs) are usually spread from an infected person to a partner during unprotected sexual intercourse. While some are spread only through sexual intercourse, others can be spread in other ways. These infections mainly affect the reproductive organs, and with the culture of silence on reproductive matters STIs can be difficult to talk about.

Some common infections are:
Gonorrhoea;
Chancroid;
Syphilis;
Genital Herpes;
Genital Warts;
HIV;
Thrush/Candidiasis;
Pubic Lice (Crabs)

 Treatment Compliance: If those with STIs seek treatment early, most STIs can be treated and cured. Delaying makes the infection more difficult to treat and allows time for infecting partners.  Be open with the health care provider, as misinformation can result in you getting the wrong treatment.  Finish all the medication even when signs and symptoms disappear.  Use condoms with all sexual partners until you are completely cured. Advise all sexual partners to seek treatment.  Go for review even if you feel very well.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FSTIs.png?alt=media&token=cf8d864a-54ea-43b7-ae59-5ebad835f254",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 78,
                'country_code' => 'ZW',
                'title' => "Signs & Symptoms Of STIs",
                'description' => "Signs and symptoms
	- Sores or blisters on the genitals on or around the anus, or mouth
	- Irregular growths (warts) in genital area
	- Vaginal or penile discharge (may be unusual-smelling or discolored)
	- Genital itching
	- Pain with urination or having a bowel movement
	- Pain with intercourse
	- Vaginal bleeding or spotting after sexual intercourse
	- Lower abdominal pain
	- Pain or swelling of glands in groin area
	- Rash
Possible complications related to STIs
	- Discomfort in the genital area
	- Infertility
	- Complications related to pregnancy, such as ectopic pregnancy or transmission of infection to a fetus
	- Reproductive system cancers
	- Pelvic Inflammatory Disease (PID)
	- Enhanced transmission of HIV
	- Epididymis",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FSTIs.png?alt=media&token=cf8d864a-54ea-43b7-ae59-5ebad835f254",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 79,
                'country_code' => 'ZW',
                'title' => "Signs Of Pregnancy",
                'description' => "Could you be pregnant? Some early pregnancy symptoms may show up around the time you've missed a period – or a week or two later. About 60 percent of women have early pregnancy symptoms by the time they're 6 weeks along, and roughly 90 percent have them by the time they're 8 weeks.
If you're not keeping track of your menstrual cycle or if it varies widely from one month to the next, you may not be sure when to expect your period. But if you start to feel some of the early pregnancy symptoms below (not all women get them) and you're wondering why you haven't gotten your period, you may very well be pregnant.
		- Food aversions
		- Mood swings
		- Abdominal bloating
		- Frequent urination
		- Fatigue
		- Sore sensitive, swollen breasts
One common pregnancy symptom is sensitive, swollen breasts caused by rising levels of hormones.
		- Light bleeding or spotting
		- Nausea
		- A missed period
If you're usually pretty regular and your period doesn't arrive on time, you may decide to do a pregnancy test before you notice any of the above symptoms.
		- High basal body temperature
If you've been charting your basal body temperature and you see that your temperature has stayed elevated for more than two weeks, you're probably pregnant.
",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FPregnancy%20Signs..png?alt=media&token=8e195086-3b89-45ee-a5c9-94b2e57a0eac",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 80,
                'country_code' => 'ZW',
                'title' => "Strategies Of Preventing STIs & HIV",
                'description' => "A number of strategies can be employed in order to achieve ‘Zero’ new STI/HIV infections.
	- A - abstinence
	- B - be faithful to one mutual partner
	- C - correct and consistent use of condoms
	- D - delay  early sexual debut
	- E - early treatment of STIs
	-  F- frank discussions about sex /HIV and AIDS
	- G - get real by getting tested
	- M - Male Circumcision
	- P - Prevention of Mother to Child Transmission
	- T – Treatment as prevention: ARVs lower the amount of HIV in the body, reducing the chances of transmitting to an uninfected partner

Prevention
The spread of HIV infection can be prevented by:
	1. Abstaining from sex.
	2. Having one mutually faithful uninfected partner.
	3. Correct and consistent use of condoms
	4. Avoiding the use of or sharing of unsterilized needles and syringes.
Avoiding sharing razor blades and ear-piercing instruments that cut the skin.",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FStrategyv.png?alt=media&token=84fa13c4-7a11-4c9b-89a6-a04a70390a4d",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 81,
                'country_code' => 'ZW',
                'title' => "Voluntary Medical Male Circumcision ",
                'description' => "Male circumcision is the surgical removal of some or the entire foreskin (prepuce) from the penis. The WHO currently recommends circumcision as part of a comprehensive program for prevention of HIV transmission in areas with high endemic rates of HIV. Male circumcision reduces HIV transmission from HIV infected females to males by 60%.
Benefits of circumcision
	- Easier hygiene. Circumcision makes it simpler to wash the penis
	- Decreased risk of urinary tract infections
	- Decreased risk of sexually transmitted infections including HIV
	- Prevention of penile problems
	- Decreased risk of penile cancer.
	- Reduces your partner's chances of having cervical cancer
NOTE: Male circumcision provides only partial protection, and therefore should be only one element of a comprehensive HIV prevention package which includes:
Any Male Who Need to know more about circumcision to the following centres:
- All Central hospitals, district Hospitals and clinics

NOTE: You can also simply Send a Call Back To The Youth Helpline 0777 469 107 For More Information on Male Circumcision
",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FVMMC..png?alt=media&token=121cf935-4e40-4365-a439-560d8807bde0",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 82,
                'country_code' => 'ZW',
                'title' => "What are the dangers of Oral Sex",
                'description' => "",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FWhat%20are%20the%20dangers%20of%20Oral%20Sex%20.png?alt=media&token=9eb3b480-ef37-42e4-83a9-657c7eb0d6f0",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 83,
                'country_code' => 'ZW',
                'title' => "What is Oral Sex?",
                'description' => "",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FWhat%20is%20Oral%20Sex.png?alt=media&token=811bc3b1-cb7c-4bfd-a549-78b93814843e",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 84,
                'country_code' => 'ZW',
                'title' => "What is Protected Sex",
                'description' => "",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FWhat%20is%20Protected%20Sex%20.png?alt=media&token=3c2de183-d960-4514-85c1-00a83df838ed",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 85,
                'country_code' => 'ZW',
                'title' => "Who should provide Contraceptives in a relationship ",
                'description' => "",
                'imageUrl' => "https://firebasestorage.googleapis.com/v0/b/yazipo-cf2c6.appspot.com/o/sextalk%2FWho%20should%20provide%20Contraceptives%20in%20a%20relationship%20.png?alt=media&token=6e63d3ae-7e96-47d8-9f7f-51d5b7a9458b",
                'category_id' => 6,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // Category: STIs
            [
                'id' => 86,
                'country_code' => 'ZW',
                'title' => "Signs, Symptoms, and Complications of STIs ",
                'description' => "Signs and symptoms

Sores or blisters on the genitals on or around the anus, or mouth

Irregular growths (warts) in genital area

Vaginal or penile discharge (maybe unusual-smelling or discoloured)

Genital itching

Pain with urination or having a bowel movement

Pain with intercourse

Vaginal bleeding or spotting after sexual intercourse

Lower abdominal pain

Pain or swelling of glands in groin area

Rash


<strong>Possible complications related to STIs</strong>

Discomfort in the genital area

Infertility

Complications related to pregnancy, such as ectopic pregnancy or transmission of infection to a fetus

Reproductive system cancers

Pelvic Inflammatory Disease (PID)

Enhanced transmission of HIV

Epididymitis",
                'imageUrl' => "",
                'category_id' => 5,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 87,
                'country_code' => 'ZW',
                'title' => "Word of Advice ",
                'description' => "The signs and symptoms listed below are a good indication that an STI is present. However, some common STIs (i.e., Chlamydia and gonorrhea) can show no symptoms. This is why clinics offer testing to all our clients for Chlamydia and gonorrhea.

Because you may not show symptoms, you can have a STI for a long time without knowing it. Untreated STIs can lead to more serious health complications.

It is important to get to know your own body, and to know what is normal and healthy for you. When something seems different, get it checked out. Keep in mind that your body won't always show signs and symptoms, and that's why we recommend regular STI testing for anyone who is sexually active whether or not they have any symptoms.

The lists below describe some of the general symptoms that might accompany and STI. ",
                'imageUrl' => "",
                'category_id' => 5,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 88,
                'country_code' => 'ZW',
                'title' => "HIV, STIGMA & DISCRIMINATION ",
                'description' => "This fear, coupled with many other reasons, means that lots of people falsely believe:

HIV and AIDS are always associated with death

HIV is associated with behaviours that some people disapprove of (such as homosexuality, drug use, sex work or infidelity)

HIV is only transmitted through sex, which is a taboo subject in some cultures

HIV infection is the result of personal irresponsibility or moral fault (such as infidelity) that deserves to be punished

inaccurate information about how HIV is transmitted, which creates irrational behaviour and misperceptions of personal risk.





Seven Important things we can do to reduce Stigma and Discrimination

1. Know the facts.

Educate yourself about mental health problems. Learn the facts instead of the myths. Finding out information from the Youth Helpline is a great way to start.

2. Be aware of your attitudes and behaviour

Before you judge, investigate. HIV/AIDS is not all about sexual immorality. There are structural factors that expose people to HIV infection. Find out what those are & become open minded. The same can be said to our choice of words. The way we speak can affect the way other people think and speak. Don’t use hurtful or derogatory language.

4. Educate others

YAZ holds annual ASRH Trainings for 18-24 young people to equip them with information, skills on the health of young people. Find opportunities to pass on facts and positive attitudes about people with mental health problems. Correct information helps you in challenging stereotypes and derogatory language. Inform your peers why it is necessary to adopt positive thinking.

5. Focus on the positive

People with mental health and substance use problems make valuable contributions to society. Their health problems are just one part of who they are. We’ve all heard the negative stories. Let’s recognize and applaud the positive ones.

6. Support people

Treat people who have mental health problems with dignity and respect. Think about how you’d like others to act toward you if you were in the same situation. If you have family members, friends or co-workers with substance use or mental health problems, support their choices and encourage their efforts to get well.

7. Include everyone

In Zimbabwe, it is against the law for employers and people who provide services to discriminate against people with mental health and substance use problems. Denying people access to things such as jobs, housing and health care, which the rest of us take for granted, violates human rights.

People with mental health and substance use problems have a right to take an equal part in society. Let’s make sure that happens.





 ",
                'imageUrl' => "",
                'category_id' => 5,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // Category: Violence
            [
                'id' => 89,
                'country_code' => 'ZW',
                'title' => "Bodily Integrity",
                'description' => "The principle of bodily integrity sums up the right of each human being, including children, to autonomy and self-determination over their own body. It considers an unconsented physical intrusion as a human rights violation.

While the principle has traditionally been raised in connection with practices such as torture, inhumane treatment and forced disappearance, bodily integrity has the potential to apply to wide range of human rights violations, which also affect children’s civil rights.

Practices which violate a child's bodily integrity include all forms of physical violence, ranging from corporal punishment to forced medical treatment, sometimes against a child's express wishes. Non-therapeutic and unconsented surgeries are also violations of bodily integrity, and include practices such as 'corrective' genital surgery performed on intersex children, gender reassignment surgery, female genital mutilation, routine circumcision of male infants and boys, and the sterilisation of people with learning disabilities.

Children are especially vulnerable to such practices, as these are usually performed on people at a very young age when they are unable to speak up for and defend themselves, or give - or refuse - consent.
",
                'imageUrl' => "",
                'category_id' => 4,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 90,
                'country_code' => 'ZW',
                'title' => "Consent",
                'description' => "Consent is a very critical enabler to yong people exercising their individual autonomy in matters pertainming to their health and well-being. Consent is highly susceptible to harmful, gendered soxio-cultural norms that normalize the systemic and gendered violations of young people`s ability to making an informed decision. The ASRH Strategy II 92016-2020) reports that 41% of girls aged 13-17years & 32.5%of girls aged 18-24 experienced sexual violence prior to 18 years.

Consent also has to do with one`s mental, physical, cognitive and social environments. These factors can negatively affect can impair an individual`s ability  for sound decision-making. For example, one`s agreement to engage in sexual encounter during r after the consumption of alcohol and drugs can not be fully described as consent.

One does not consent to sexual activity once in a lifetime. It is an ongoing process that every individual must exercise freewill in accepting. As a young person, ensure that engaging in sexual activity is done with your whole approval. Giving consent during emotional threats is not consent. It is acting out of fear not freewill. Responsible, respectful, wise, healthy young people don’t use force, seek consent always!.

It is worth mentioning the increase in the cases of date rape against females through subtle pressure commonky known as “spiking” is common at parties and clubs. This is an attempt to engage in sexual encounter without a person`s approval but depending on the impaired decision-making capacity and ability to resist.

Simply because you engaged in sexual encounter with a person doesn’t guarantee you the right to demand sexual favours. Consent is ongoing. Using this as justification without a partner`s approval is rape!. Young women going through divorce are usually susceptible to this violation of consent. Your consent, your right, your responsibility, your health!.
",
                'imageUrl' => "",
                'category_id' => 4,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 91,
                'country_code' => 'ZW',
                'title' => "Examples Of Coercion",
                'description' => "Alcohol is the most widely used date rape drug. Because drinking is socially acceptable, perpetrators can camouflage their actions by employing excessive drinking to disarm a potential victim. It’s typically not the case that someone is going to slip something into your drink, but rather that they are going to buy you multiple drinks.

“If you really loved me, you would have sex with me”

 “You don’t find me attractive anymore otherwise you’d have sex with me”

 “If we don’t have sex I don’t think we can be together”

Hounding is when someone repeatedly asks, and through the process of wearing a victim down, they eventually receive a constrained “yes”.



“I will expose your chats  to everyone if you don’t want to do it with me”

 ",
                'imageUrl' => "",
                'category_id' => 4,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 92,
                'country_code' => 'ZW',
                'title' => "Privacy",
                'description' => "In SRH, privacy implies the right of young people to receive information in the way that one desires, be treated in rooms that offer protection from other people hearing the conversations and identifying names protected through use of coded names, pseudonyms.



Privacy is one of the factors that determine young peoples uptake of SRH services. As a result, the government of Zimbabwe, through the ministry of health and child care developed the 9 clinical standards on youth friendly service provision to guide how young people ought to be treated in clinical settings only. Standard 5 states that:



“The health SDP has convenient operating hours, a welcoming and clean environment and maintains privacy and confidentiality. It has the equipment, medicines, supplies and technology needed to ensure effective service provision to adolescents and youth.” ",
                'imageUrl' => "",
                'category_id' => 4,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 93,
                'country_code' => 'ZW',
                'title' => "safeUseOfTechnology",
                'description' => "New technological products are flooding the market. New models, new gadgets, improved social networking sites are just a click away. Human beings and technology are increasingly becoming inseparable. Distance has been made shorter, friends are no longer limited to your neighborhood or old classmates. The world has become one. However, ICTs have this rather risky side when not fully informed a young person`s privacy and security may be heavily compromised. We have compiled a list of safety tricks to help you navigate the world of ICTs

Keep personal information private such as phone number, home address.

Check your privacy settings to control who sees what and when.

Know how to report such as adult content, misleading information. posts

Never meet anyone in person you’ve only met online

Use a strong password.  The longer it is, the more secure it will be.

Use a different password for each of your social media accounts.

Set up your security answers.  This two factor authentication is available for most social media sites.

If you have social media apps on your phone, be sure to password protect your device.

Be selective with friend requests. If you don’t know the person, don’t accept their request.  It could be a fake account.

Click links with caution.  Social media accounts are regularly hacked.  Look out for language or content that does not sound like something your friend would post.

Do not send your sensitive pictures. They can be forwarded to other people.

Become familiar with the privacy policies of the social media channels you use and customize your privacy settings to control who sees what.

Protect your computer by installing antivirus software to safeguard.  Also ensure that your browser, operating system, and software are kept up to date.

Remember to log off when you’re done.

 ",
                'imageUrl' => "",
                'category_id' => 4,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 94,
                'country_code' => 'ZW',
                'title' => "What Are The Main Risk Factors For Youth Violence?",
                'description' => "Individual factors The principle personality and behavioral factors linked with youth violence are: hyperactivity impulsiveness poor behavioral control attention problems history of early aggressive behavior low educational achievement. Influences by family and peers The home environment is key to the development of violent behavior in young people. Some of the key family factors associated with adolescent violence are: poor supervision of children by parents and harsh physical punishment to discipline children parental conflict in early childhood a low level of attachment between parents and children a mother who had her first child at an early age experiencing parental separation or divorce at a young age a low level of family cohesion low socioeconomic status of the family. Associating with delinquent peers has also been linked to violence in young people. Social, political and cultural factors Gangs and a local supply of guns and drugs are a potent mixture, increasing the likelihood of youth violence. Low levels of social cohesion within a community have been linked to higher rates of youth violence. The quality of a country’s governance – its laws and the extent to which they are enforced, as well as policies for social protection – has an important effect on violence. Factors such as income inequality, rapid demographic changes in the youth population, and urbanization have all been positively linked with youth violence. Cultures that do not provide non-violent alternatives for resolving conflicts appear to have higher rates of youth violence.",
                'imageUrl' => "",
                'category_id' => 4,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 95,
                'country_code' => 'ZW',
                'title' => "What Can Be Done To Prevent Youth Violence?",
                'description' => " A variety of approaches have been tried to reduce violent behavior among young people. The most common interventions seek to change individuals’ skills, attitudes and beliefs. These types of programs are frequently carried out in school settings and are designed to help children and adolescents manage anger, resolve conflict, and develop the necessary social skills to solve problems. Another common set of prevention strategies addressing youth violence focuses on early intervention with children and families. Such programs provide parents with information about child development and teach them how to effectively discipline, monitor and supervise children, as well as how to manage family conflict and improve communication. Parent and family-based interventions are among the most promising strategies for producing long-term reductions in youth violence. Other approaches focus on community settings and some of the more prominent societal factors related to youth violence. They range from public information campaigns and community policing to improving settings such as schools and hospitals. Also included are legislative, judicial, and educational reforms as well as other policy reforms designed to mitigate the effects of rapid social change and tackle gun violence among youths. Most of these approaches, though, have not been evaluated",
                'imageUrl' => "",
                'category_id' => 4,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // 11 - Body Image & self Esteem
            [
                'id' => 96,
                'country_code' => 'ZW',
                'title' => "What is Body Image and Self Esteem ?",
                'description' => "Body Image refers to the mental picture you have of your own body and how you see yourself when you look in a mirror .Self esteem is how you value and respect yourself as a person.Body image and self esteem are closely intertwined and they directly influence one another.
Body Image is the evaluation of your physical appearance, especially regarding how you think others may perceive you.It is how you think and find about your body.On the other hand,self esteem is the way you feel about yourself as a whole .It's how you see yourself and how much value you place on your existence.
Often, bullying and criticism by other people can lead to a negative body image. Self-esteem is the extent to which you appreciate your individuality and like yourself. How people judge your personality affects your self-esteem.
How does Body Image affect Self esteem ?
Self-esteem and body image have a profound impact on your thoughts, feelings, and behaviors. When you compare your body to someone else’s, you can never be content because you can’t measure up. The social media-frenzied and photo-shopped society make people believe there is a standard for beauty. However, it is usually not realistic. If it is not real, it is not achievable either. Yet, most people think otherwise and suffer from low self-esteem.
Positive body image and self-esteem
People who love their bodies regardless of the differences are more likely to be confident and happy with their lives. A positive body image includes being comfortable with the way you look, eating healthy to meet the body’s needs, and understanding that looks don’t have anything to do with abilities or worth. When you have a positive and healthy body image, you feel more capable and energetic. You keep realistic expectations and respect yourself, consequently boosting self-esteem.
Having a positive body image works wonders for mental health because you make time to take care of yourself even during stressful situations and accept that one can not attain 100% perfection. People with higher self-esteem and value for oneself are more in control of their lives because they have a realistic understanding of their weaknesses and strengths, allowing them to gain mental clarity and peace required to succeed at work, school, and relationships.

Negative body image and self-esteem
Having a negative body image damages your self-esteem. Teenagers are most prone to having a negative body image. This harms their confidence and affects their social and communicative skills. Many teens fall into depression due to the negativity they feel about their bodies and the judgment they perceive from others.
It is crucial to understand the long-term impact of low self-esteem and negative body image. A healthy life requires positive thinking. Negativity affects both your physical and psychological well-being. Anything from relatives’ comments to exposure to unrealistic body types through social media can pressure a person to look a certain way.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 2,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 97,
                'country_code' => 'ZW',
                'title' => "Ways to improve body image and self esteem",
                'description' => "If you are struggling through a difficult phase dealing with low self-esteem and negative body image, here are some super simple ways to deal with your problem:
Accept your body
This acceptance starts with you. You need to consider your body a friend and start loving it. Self-shaming and making harsh comments about your body harm your self-esteem. Be kind to yourself first; other people will follow.
Praise your body’s features
A great way to boost your self-esteem and get rid of negative body image is to praise your body’s positive aspects like your hands, hair, feet, or eyes. Tell yourself what you like the most about your body and why. If you struggle with finding something good, ask your friends. You’d be surprised by what people find attractive—knowing that your loved ones like your hair or eyes could boost your self-esteem.
Eat healthily
Loving your body requires taking care of it. Many people who suffer from low self-esteem due to negative body image often starve themselves or overeat to meet their requirements. Many eating disorders are also linked with a negative body image. Eating healthy and in the right proportions is the first step towards self-acceptance and positive body image.
Adopt healthy habits
Adopt healthy habits to take care of your body. Getting enough sleep and having a healthy lifestyle is beneficial for your body. Not only do good habits work wonders for your health in general, but they also boost self-confidence and create a more robust body image in your mind.
Surround yourself with positivity
Surround yourself with people who support and encourage you.Avoid people who make negative comments about your appearance or who make you feel bad about yourself
Be kind to yourself
Treat yourself with kindness and compassion.Dont be too hard on yourself when things don't go as planned .
Seek for professional help
If you're struggling with body image issues , consider seeking professional help from a therapist or counselor who specializes in this area.Sometimes, negative body image and low self-esteem are too much to deal with alone. A negative body image may create health problems and you may fall into depression. Eating disorders and trauma can also affect how you feel about your body. If you feel overwhelmed by negative body image and self-esteem issues, getting professional help is a must.

Remember that improving your body image is a journey and it takes time and effort.Be patient with yourself and celebrate small victories along the way.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 2,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 98,
                'country_code' => 'ZW',
                'title' => "Body Image and Self esteem",
                'description' => "Nowadays, confidence plays such an important role in our lives to get through some tough moments. It’s the exact same with self-esteem. Everyone should feel proud and good of themselves. It is believed that feeling good about yourself can affect your mental health that will eventually lead you to how to behave. Regarding body image, well we humans care so much about our physical appearance especially people in their early teens. It’s simply got to do with whether or not we are looking attractive enough for others to like your looks. These are all common things that can’t be avoided in one’s life.
It is also important to explore behavior that may be linked to the thoughts of an ideal body image and the level of self-esteem, such as exercising and dieting. Body image issues  involving the ways we perceive our physical appearance  have become a major area of concern in the twenty-first century, particularly for pre-adolescent and adolescent girls. In a society that focuses much of its attention on looks, many young girls feel dissatisfied with their bodies, often resorting to methods of dieting in order to appear slimmer. These methods can often be dangerous and in some extreme cases, precipitate eating disorders. It is largely believed that the media is the main contributor to young girls’ body dissatisfaction, due to its tendency to label thin figures as “ideal” and larger figures as “unflattering” or simply unhealthy.
Teenagers desire to have a slim body and to be beautiful such as women in media. The media is the most powerful influence on teenagers’ sexual behaviors and attitudes because the media emphasized the slim body of woman in advertisings. Also, the media tend to impose that women should be thin, which can harm adolescent girls who are unable to achieve the highly idealized shape of models. When teenagers think that their body seems different than the models in media, young people are not only losing their confidence but also being afraid of standing in front of people or encountering people.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 2,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 99,
                'country_code' => 'ZW',
                'title' => "Importance of body image and self esteem ",
                'description' => "1. Mental and emotional well-being:
A positive body image and high self-esteem contribute to overall mental and emotional well-being. When we have a healthy view of our bodies and ourselves, it promotes positive thoughts and feelings, reducing stress, anxiety, and depression.
2. Healthy relationships:
Confidence in our bodies and ourselves enhances our ability to build and maintain healthy relationships. When we feel good about ourselves, we are more likely to engage in positive social interactions, form meaningful connections, and set healthy boundaries.
3. Physical health:
A positive body image can motivate us to engage in behaviors that promote physical health, such as exercise, nutritious eating, and self-care. When we value our bodies, we are more inclined to take care of them, leading to improved overall physical well-being.
4. Empowerment and personal growth:
Developing a positive body image and self-esteem empowers us to embrace our uniqueness, strengths, and abilities. It allows us to pursue our goals, take risks, and grow personally, as we believe in our own capabilities and worth.
5. Resilience:
Having a healthy body image and self-esteem can increase our resilience in the face of challenges and setbacks. When we trust in ourselves and our abilities, we are better able to navigate difficulties, bounce back from failures, and persevere through tough times.
6. Positive self-perception:
A positive body image and self-esteem influence how we perceive ourselves. When we have a healthy self-perception, we are more likely to engage in positive self-talk, be accepting of our flaws, and see ourselves in a realistic and compassionate light.
7. Overall life satisfaction:
Ultimately, a positive body image and high self-esteem contribute to overall life satisfaction. When we feel good about ourselves and our bodies, we are more content, fulfilled, and capable of enjoying the various aspects of our lives.

It is crucial to work towards cultivating a positive body image and self-esteem, as they play a significant role in our overall well-being and quality of life.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 2,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 100,
                'country_code' => 'ZW',
                'title' => "Building and maintaining a health self esteem",
                'description' => "Body Image consist of several factors.It isn't only explained by what we think of our body when we look in the mirror.It also includes how we feel about our bodies and what your beliefs about it are.Our self esteem and our mental health are directly connected and influenced by the way we see our bodies.All aspects of our personality are independent and equally important and should not be neglected.
 How  body image affects self esteem and mental health
 Body image can have a significant impact on self-esteem and mental health. When someone has negative thoughts or feelings about their body, it can lead to a decrease in self-esteem. They may feel inadequate or insecure, comparing themselves to societal standards or unrealistic ideals.
 This negative body image can have a ripple effect on mental health. It can contribute to the development of various mental health issues such as anxiety, depression, and eating disorders. Individuals may become preoccupied with their appearance, constantly worrying about how they are perceived by others. This preoccupation can consume their thoughts and lead to a decline in overall mental well-being.
 Moreover, societal pressures, media influence, and cultural expectations play a role in shaping one's body image. Constant exposure to images of \"ideal\" bodies in advertisements and social media can create an unrealistic standard that is unattainable for most people. This constant bombardment can further exacerbate negative body image and impact self-esteem and mental health.
 It is important to remember that developing a healthy body image is a process that takes time and effort. Seeking support from loved ones, practicing self-compassion, and challenging negative thoughts are all strategies that can help improve body image and promote better mental .
 Accepting ourselves as a whole can be a long and difficult process for some people.If you find yourself struggling with it ,be patient with yourself.Take one day at a time , slowly becoming aware of every wonderful characteristic that you posses.The better your body image gets,the more other aspects of your personality will improve.
 ",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 2,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 101,
                'country_code' => 'ZW',
                'title' => "Factors that affect body image and self esteem",
                'description' => "There are several factors that can influence body image and self-esteem. It's important to remember that these factors can vary from person to person, and everyone's experience is unique. Here are some common factors to consider:
   1. Media and societal influences
   The media often promotes unrealistic beauty standards, which can lead to negative comparisons and feelings of inadequacy. Social media platforms, in particular, can contribute to a culture of comparison and highlight curated versions of people's lives.

   2. Family and peer relationships
   The opinions and comments of family members and peers can significantly impact one's body image and self-esteem. Negative remarks or pressure to conform to certain ideals can be damaging.

   3. Personal experiences
   Past experiences such as bullying, trauma, or body shaming can have long-lasting effects on body image and self-esteem. These experiences can shape how a person perceives themselves and their worth.

   4. Cultural and societal norms
   Different cultures and societies have their own beauty standards, and individuals may feel pressured to conform to these expectations. This can vary in terms of body size, shape, skin color, and other physical attributes.

   5. Personal characteristics
   Personal characteristics, including personality traits and temperament, can also play a role in body image and self-esteem. Individuals who are more prone to perfectionism, self-criticism, or have a tendency to compare themselves to others may be more at risk for developing negative body image.

   6. Health and physical conditions
   Physical health conditions, disabilities, or chronic illnesses can affect body image and self-esteem. Changes in appearance or limitations in physical abilities may impact how individuals perceive themselves.

   7. Cultural and historical factors
   Historical context and cultural values can shape our understanding of beauty and affect body image. Different time periods and regions may prioritize certain physical attributes over others.
   It is important to seek support and resources, such as therapy, to help navigate and address any negative impacts on body image and self-esteem. Remember, everyone deserves to feel confident and comfortable in their own skin.
   ",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 2,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 102,
                'country_code' => 'ZW',
                'title' => "The impacts of body image on self esteem ",
                'description' => "Body image can have a significant impact on an individual's self-esteem, particularly during adolescence. During this stage of life, young people experience rapid physical changes that can make them more self-conscious about their appearance. It is common for adolescents to compare themselves to media standards and societal expectations, which can negatively affect their self-esteem if they perceive themselves as falling short.
    When adolescents have negative body image, they may feel dissatisfied with their physical appearance and believe that they do not meet the ideals set by society. This can lead to a decrease in self-esteem as they begin to question their worth and value based on their looks. They may start to develop feelings of inadequacy and believe that they are not attractive or desirable enough.
    Furthermore, negative body image can also fuel social comparison and lead to increased feelings of self-consciousness. Adolescents may constantly compare their appearance to others, leading to self-criticism and a heightened awareness of any perceived flaws. This can create a cycle of negative thoughts and feelings, further impacting their self-esteem.
    It is important to note that body image concerns can also lead to more serious issues such as disordered eating patterns, depression, and anxiety. Therefore, it is crucial to address these concerns early on and provide support and guidance to adolescents.
    To help address the impacts of body image on self-esteem in adolescence, it is important to promote a positive body image and self-acceptance. Encouraging open conversations about healthy body ideals and challenging societal beauty standards can help combat negative perceptions. Additionally, focusing on overall well-being, such as promoting healthy eating habits, regular exercise, and self-care practices, can contribute to a more positive body image.
    Supportive adults, such as parents, teachers, and mentors, play a vital role in fostering positive self-esteem. By providing encouragement, understanding, and acceptance, they can help teenagers develop a more realistic and healthy perception of themselves. It is essential to reinforce that self-worth is not solely dependent on appearance but on various strengths, talents, and qualities that make each individual unique.
    Overall, addressing the impacts of body image on self-esteem in adolescence requires a multi-faceted approach that emphasizes self-acceptance, positive body image, and the importance of inner qualities and strengths. With patience, understanding, and support, adolescents can develop a healthier and more positive sense of self-esteem.
    ",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 2,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 103,
                'country_code' => 'ZW',
                'title' => "Steps to boost self esteem",
                'description' => "Boosting your self-esteem is an important and valuable goal. Here are some steps you can take to help increase your self-esteem:
    1. Practice Self-Compassion:
    Be kind to yourself and show understanding when you make mistakes or face challenges. Treat yourself with the same patience, gentleness, and understanding that you would offer to a close friend.

    2. Celebrate Your Successes:
    Acknowledge your achievements, no matter how small they may seem. Take the time to celebrate your accomplishments and give yourself credit for your efforts.

    3. Challenge Negative Self-Talk:
     Notice any negative thoughts or beliefs you may have about yourself and question their validity. Replace these negative thoughts with more positive and realistic affirmations.

    4. Surround Yourself with Positive People:
    Seek out and surround yourself with supportive and positive individuals who uplift and encourage you. Avoid people who bring you down or constantly criticize you.

    5. Set Realistic Goals:
    Set achievable goals that align with your values and interests. Accomplishing these goals will help build confidence and strengthen your belief in your abilities.

    6. Take Care of Yourself:
    Engage in activities that promote self-care and well-being. This can include things like exercise, getting enough sleep, eating nutritious meals, and engaging in hobbies that bring you joy.

    7. Practice Self-Reflection:
    Dedicate time to reflect on your strengths, talents, and qualities. Appreciating your unique attributes can enhance your self-esteem and help you recognize your worth.

    8. Seek Professional Help if Needed:
    If you have deep-seated self-esteem issues, consider seeking support from a therapist or counselor. They can provide guidance and tools tailored to your specific needs.
    Remember, building self-esteem is a gradual process. Be patient with yourself and keep working on developing a positive self-image.
    ",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 2,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 104,
                'country_code' => 'ZW',
                'title' => "Importance of body image and self-esteem",
                'description' => "1. Mental and emotional well-being:
      A positive body image and high self-esteem contribute to overall mental and emotional well-being. When we have a healthy view of our bodies and ourselves, it promotes positive thoughts and feelings, reducing stress, anxiety, and depression.

      2. Healthy relationships:
      Confidence in our bodies and ourselves enhances our ability to build and maintain healthy relationships. When we feel good about ourselves, we are more likely to engage in positive social interactions, form meaningful connections, and set healthy boundaries.

      3. Physical health:
      A positive body image can motivate us to engage in behaviors that promote physical health, such as exercise, nutritious eating, and self-care. When we value our bodies, we are more inclined to take care of them, leading to improved overall physical well-being.

      4. Empowerment and personal growth:
      Developing a positive body image and self-esteem empowers us to embrace our uniqueness, strengths, and abilities. It allows us to pursue our goals, take risks, and grow personally, as we believe in our own capabilities and worth.

      5. Resilience:
      Having a healthy body image and self-esteem can increase our resilience in the face of challenges and setbacks. When we trust in ourselves and our abilities, we are better able to navigate difficulties, bounce back from failures, and persevere through tough times.

      6. Positive self-perception:
      A positive body image and self-esteem influence how we perceive ourselves. When we have a healthy self-perception, we are more likely to engage in positive self-talk, be accepting of our flaws, and see ourselves in a realistic and compassionate light.

      7. Overall life satisfaction:
      Ultimately, a positive body image and high self-esteem contribute to overall life satisfaction. When we feel good about ourselves and our bodies, we are more content, fulfilled, and capable of enjoying the various aspects of our lives.

      It is crucial to work towards cultivating a positive body image and self-esteem, as they play a significant role in our overall well-being and quality of life.
      ",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 2,
                'status' => 1,
                'created_at' => '2023-03-119:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // 25 - Savings and Investments
            [
                'id' => 105,
                'country_code' => 'ZW',
                'title' => "Building a Strong Financial Future for Young People!",
                'description' => "Introduction
When it comes to securing your financial future, it's never too early to start saving and investing. As a young person, developing good saving habits and exploring investment opportunities can set you on the path to long-term financial success. In this article, we'll delve into the importance of saving and introduce you to some basic investment options that can help you grow your money over time.
The Power of Saving Saving money is a fundamental step towards achieving financial independence. By putting aside a portion of your income regularly, you create a safety net for unexpected expenses and lay the foundation for important financial goals such as buying a car, financing your education, or even starting a business. Begin by setting a realistic savings goal and make it a habit to save a certain percentage of your earnings each month. Whether it's 10%, 20%, or any other amount that works for you, consistent saving will help you build a healthy financial cushion for the future.

Exploring Investment Options
While saving is crucial, investing allows your money to work harder for you. As a young person with time on your side, investing can provide opportunities for growth and compound interest. Consider these basic investment options suitable for young individuals:
1. Stocks: Investing in individual stocks means becoming a partial owner of a company. It's important to research and select companies wisely, keeping in mind your financial goals, risk tolerance, and time horizon. Remember, the stock market can be volatile, so diversifying your portfolio is key.
2. Mutual Funds: Mutual funds pool money from multiple investors to invest in a diversified portfolio of stocks, bonds, or other assets. They offer the benefit of professional management and diversification, making them a popular choice for young investors.
3. Exchange-Traded Funds (ETFs): Similar to mutual funds, ETFs are investment funds that trade on stock exchanges. ETFs offer a broader market exposure and can be an affordable and convenient way to invest in various asset classes.

Conclusion
Saving and investing are vital for securing a strong financial future as a young person. By adopting healthy saving habits and exploring investment options like stocks, mutual funds, and ETFs, you can grow your wealth over time and pave the way for financial freedom. Start saving and investing today, and watch your money work for you tomorrow!
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 1,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // 21 - Menstrual health Management
            [
                'id' => 106,
                'country_code' => 'ZW',
                'title' => "Importance of Menstrual Health Management",
                'description' => "Menstrual Health Management is the practice of keeping oneself clean and healthly during menstruation.It encompasses both menstrual hygiene management practices and factors that link menstruation with health ,well being,gender , education,equity , empowerment and human rights.Menstrual health management is essential to the well being and empowerment of young girls and women .It is important for girls and women to have access to safe and affordable sanitary materials to manage their menstrual because it helps to decrease their risk of infections.Good menstrual health management plays a fundamental role in enabling women ,girls and other menstruators to reach their full potential.
Methods of Managing Menstrual Health
For women and adolescent girls to effectively manage their menstruation,girls and women must have access towater, sanitation and hygiene facilities, affordable and appropriate menstrual hygiene materials, information on good practices and a supportive environment where they can manage menstruation without embarrassment or stigma.
Women and adolescence must use clean menstrual management material to absorb or collect menstrual blood,that can be changed as often as necessary,using soap and water for washing the body as required and having access to safe and convenient facilities to dispose used menstrual materials
Ways to promote good menstrual health
Wear light weight breathable clothing such as cotton underwear
Change your menstrual products regularly
Keep your genital area clean
Use unscented toilet paper, tampons or pads
Drink enough liquids
Track and monitor your period
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 2,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 107,
                'country_code' => 'ZW',
                'title' => "Menstrual health Management",
                'description' => "It is important to note that menstrual health management is a fundamental need for women and girls. However millions of girls ,women, transgender ,men and non-binary persons are unable to manage their menstrual cycle in a dignified and healthy way due to gender inequality, discrimination, social norms, cultural taboos, poverty and lack of basic services like toilets and sanitary products. Therefore ,it is crucial to provide access to these basic needs for everyone.
Ways to support menstrual health management
Supporting menstrual health management initiatives is crucial for promoting gender equality, health and well being.Ways to support menstrual health management includes
Raise awareness
Educate your self and others about menstrual health management,the importance and the challenges faced by individuals who lack access to proper menstrual hygiene facilities and products.
Advocate for change
Engage with local and national policy makers to prioritize menstrual health management in public health policies and programs.Support initiatives that aim to provide free or affordable menstrual hygiene products in schools, workplaces and public spaces
Donate
Contribute to organizations that work towards improving menstrual health management such as NGOs , charities or non profit organization.Your donations can help to provide menstrual hygiene products, education and infrastructure to those in need
Volunteer
Offer your time and skills to organizations working on menstrual health management projects.Assisting in organizing awareness campaigns, workshops or fundraising events.
Challenge stigma
Break the silence surrounding menstruation by openly discussing it with friends, family and colleagues.Encourage conversations that challenge myths,taboos and stereotypes associated with menstruation.
Also,, during menstruation it I important to eat foods that are high in iron and vitamin B12 to replenish blood loss and produce new red blood cells.Iron rich foods include animal sources like red meat,fish ,cheese ,as well as plant sources like peas,beans,nuts,spinach and broccoli.

Other foods that can be beneficial during menstruation include:
Water rich fruits like watermelon and cucumber to stay hydrated
Leafy green vegetables such as kale and spinach to boost iron levels
Ginger tea for anti -inflammatory effects and potential reduction of nausea.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // 13 - Child rights and Advocacy
            [
                'id' => 108,
                'country_code' => 'ZW',
                'title' => "Why children rights matters",
                'description' => "Every right, for every child.
Children and young people have the same general human rights as adults and also specific rights that recognize their special needs. Children are neither the property of their parents nor are they helpless objects of charity. They are human beings and are the subject of their own rights.
The Convention on the Rights of the Child sets out the rights that must be realized for children to develop to their full potential.
A vision of the child as an individual and as a member of a family and community, with rights and responsibilities appropriate to his or her age and stage of development.
-It recognizes the fundamental human dignity of all children and the urgency of ensuring their well-being and development.
-it created space for children to participate in local and national budgetary planning.
-It makes clear the idea that a basic quality of life should be the right of all children, rather than a privilege enjoyed by a few.
Incorporating the convention into domestic law is also important because of the socioeconomic rights it contains, which are not protected anywhere else children’s rights to the highest standard of health care and an adequate standard of living.
Children are neither the possessions of parents nor of the state, nor are they mere people-in-the making they have equal status as members of the human family, by so doing it makes sure that every child knows their rights and be able to use them not to be possessed by anyone.
Children must rely on adults for the nurture and guidance they need to grow towards independence. Such nurture is ideally found from adults in children's families, but when primary adult caregivers cannot meet children's needs, it is up to the State as the primary duty bearer to find an alternative in the best interests of the children and their wellbeing. Therefore, it is important as it brings out everyone's duty towards each other.
The actions, or inactions, of government impact children more strongly than any other group in society.
Practically every area of government policy from education  to public health affects children to some degree. Short sighted policymaking that fails to take children into account has a negative impact on the future of all members of society.
Children's views to be heard and considered in the political process.
  children's views go unheard on the many important issues that affect them now or will affect them in the future. Many changes in society are having a disproportionate, negative impact on children. Hence, by having children’s rights it reduces the abuse of children and violence as well as the violation of their rights in all sectors.
Transformation of the family structure, globalization, climate change, digitalization, mass migration, shifting employment patterns and a shrinking social welfare net in many countries all have strong impacts on children. The impact of these changes can be particularly devastating in situations of armed conflict and other emergencies.These factors affect children as people will not be aware of children's rights therefore if the rights of children are implemented and practiced it will reduce the problems that children face in their day to day living conditions.
The healthy development of children is crucial to the future well-being of any society. Therefore,it is important to have the right to healthy as children for their safety.
Because they are still developing, children are especially vulnerable more so than adults – to poor living conditions such as poverty, inadequate health care, safe water and environmental pollution. The effects of disease, malnutrition and poverty threaten the future of children and therefore the future of the societies in which they live. However children's rights are important so to protect them from all the dangers .
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 3,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 109,
                'country_code' => 'ZW',
                'title' => "Why advocate for childrens rights",
                'description' => "Children’s rights in the UN Convention and the African Charter have been ratified in Kenya, Tanzania, Uganda and Ethiopia and are reinforced by the national laws of those countries. However, children continue to experience violations of many of their rights  within the family, at the community level, and through policies and laws at the level of local and national government.
There is, therefore, a role for advocacy at all these levels. By doing effective advocacy, you can bring about key changes in local practice but also sometimes at the higher levels of policy and legislation that will have a lasting impact on children’s lives. It is possible to apply a child rights approach to advocacy on any local or international issues that affect children, such as education, health, protection or livelihoods.
Children often lack powerful advocates. They cannot vote and have little influence with policy makers. It is important, therefore, that those people who work with and for children, and those who understand their lives, take responsibility to advocate for changes to improve children's lives.
One may already have performed an advocacy role in work but if not can you think of an example from experience where one could have taken up an issue raised by a child to act as an advocate.
 Advocates stand up for children’s rights by including them in everything they  do. From designing the  services  leading to  campaigns that put young voices first.
Advocates don't work for the council or children’s services.They simply protect children’s rights and help them speak out. If a child doesn’t agree with something that affects them,  advocates make sure they’re listened to.
 Children’s rights are laid out in international, regional and national frameworks that establish the fundamental rights each child has. Children and young people who lack adequate paternal care require specific protection and are more likely to not have their rights met.
- Take  action to amplify their voices and bring them to the forefront of policy and decision-making.
-Working with states and partners to help ensure that children and young people who have lost parental care or risk losing it are protected, cared for and empowered and that their rights are respected.
- To help build a sustainable future for all children and young people.
-To put them at the centre of our actions to support the Sustainable Development Goals, recognizing that every single child and young person has a right to be included in global efforts to make sustainable development a reality.
 -To help ensure that children's and young people’s rights are fulfilled and every child and young person has the best, most suitable care and support for their specific individual needs.
-To strengthen children’s rights in the responses to crisis situations by empowering children and young people to participate meaningfully in public decision-making.
-To provide trainings to care professionals and child protection organizations to help ensure that children and young adults affected by trauma receive the necessary support.
-To develop and deliver training for care professionals and policy guidelines to help ensure that child protection systems adequately support young people leaving alternative care.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 110,
                'country_code' => 'ZW',
                'title' => "What is advocacy/definition ",
                'description' => "The role of an advocacy is to offer independent support to those who feel they are not being heard and to ensure they are taken seriously and that their rights are respected. It also assist people to access and to understand appropriate information and services.
Being an advocate is promoting and defending another person’s rights, needs and interests.Children might need an advocate if they’re at risk of harm, aren’t having their needs met, or are being denied rights.
Being an advocate involves  understanding issues, thinking about children’s needs and presenting solutions.Help children learn to speak for themselves by building their confidence and encouraging them to practise.
How to advocate for your child
understand the issue
-Make sure you have a clear understanding of the issue your child is facing. For example, your child’s school might be having difficulty managing your child’s behaviour. So the school has decided that your child can’t take part in the learn to swim program.
Think about what you want for your child
-Thinking about your child’s needs will help you decide what you want for your child. It’s important to keep an open mind because there might be solutions that you haven’t thought of. Try to get plenty of information so that you can make an informed decision about what to do. One can ask other people what they think.
For example, one might want their child to take part in the learn to swim program. Or you might want extra supervision while your child is at the program.
Present a solution
Presenting a solution is more effective than complaining. For example, one might say, ‘If the child’s behaviour continues to be a problem, one could come to the learn to swim program to help supervise.
It’s also important to consider whether the  solution might have negative consequences for the child. For example, if one went to the program to supervise, would the child be embarrassed?,and could think about timing. For example, would it be better for the  child take part in the learn to swim program now or do it next term instead?

Know your child’s rights
One will be more effective as an advocate if  knowing the  child’s rights and the rules of the system you’re advocating in .For example,  state’s education laws and the school’s policies, or the medical support your child is entitled to.
lt also helps to find out who’s responsible for what in your child’s school or other services your child uses. This way you’ll know who to talk to and what you can expect.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 3,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 111,
                'country_code' => 'ZW',
                'title' => "What are child's rights",
                'description' => "Child's rights or the rights of children are a subset of human rights with particular attention to the rights of special protection and care afforded to examples of the rights include
Right to life or survival
-The right to survival of the child entails the right to a healthy life. Children have the right to live, be safe, and have a say in how their lives are formed. Children nutrition should be of utmost concern to the government. The children should be assured of adequate safety. They should also be assured of adequate nutrition and quality healthcare services.
The right to education
 -The right to development that is right to education, innovation. Every child has the right to education and innovation which will give him or her insight into the world and make the child explore his/her full potential. Education is virtually what we can use to change the world therefore if children are given these rights they are being given the mandate to change the world in the future and also in the smallest possible way they can in this present time.If this  right is deprived of children will therefore be illegal and unconstitutional.
-Apart from learning, the children should also be given positive education of tolerance, understanding and friendship among all nations which is free from racial discrimination and will as a result contribute to maintenance of peace in the world. If the children are given the right to education and innovation and are instilled with positive orientation and sensitization at this early stage of their life then they will be a veritable tool for national/world development as well as inclusion in the nearest future.
The right from exploitation
Moreover, the children have the right to protection that is right from exploitation, abuse and any form of intimidation. This right makes sure that all children are nurtured  and guided from harmful influences. This is the reason why their needs are to be provided for by their parents and families and not subjecting them to work or having them face any kind of physical or mental abuse. They are also to be shielded by their parents and the state from any external factors that may hamper their life. They are to be nurtured with love and they should not be subjected to torture of any form though they stand to be corrected.
The right to participation

 The children have the right to participation, to expression, to information, thought, association and religion. Since children are impacted by almost every aspect of government policy they should be included in the thought process of their immediate societies. Children are seen as citizens with little or no knowledge they are excluded from political meetings and some other gathering of reason that concerns them.  Children’s voices go unheard on several crucial topics that concern them now or may affect them in the future if particular attention is not paid for their viewpoints.
 Children’s opinions should be respected and taking into account during election process. Many societal changes have negative consequences on children.
In conclusion, all citizens must be held accountable for ensuring child rights for every child in the country. It has to ensure these rights are discharged to all underprivileged children, girl child, street children, children enslaved in labor, physically and mentally challenged children, children used for commercial sex, and children in juvenile institutions.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 3,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 112,
                'country_code' => 'ZW',
                'title' => "How children's rights are being violated",
                'description' => "-Grave violations against children in times of war
-How children have become frontline targets in armed conflicts
From widespread killing, maiming, abduction and sexual violence to recruitment into armed groups and strikes on schools and hospitals, as well as essential water facilities .Children living in conflict zones around the world continue to come under attack on a shocking scale.
What are these restrictions?
-Students are forced to sit in chairs all day, when their bodies were designed to move.
-They aren’t allowed to interact with their friends, when their brains are wired for huge amounts of social interaction.
-They aren’t allowed to speak their minds.
-They are told where to go, what to do, and where to sit, every minute of the day.
-They are told what to learn, even if it’s something they aren’t interested in.
-They are required to follow directions exactly, with little or no room for creativity.
Like all people, children hate to be micromanaged. Science has even shown that a lack of autonomy is damaging to people’s mental health, regardless of age.
Students are
To better monitor, prevent, and end these attacks, the United Nations Security Council has identified and condemned  grave violations against children in times of war
- klling and maiming of children, recruitment or use of children in armed forces
- armed groups attacks on schools or hospitals
- rape or other grave sexual violence, abduction of children
- denial of humanitarian access
-Children’s assets are controlled by parents. They force a child into involuntary servitude, and they are often the sole source of income for the child. They “steal” the belongings of the child or dictate how the child can use them, and officially, their permission is required for any transactions.

-Parents can force a child through “treatments” like gay conversion therapy that don’t work because of their religion, which is also often enforced onto the child themselves, especially in the Bible Belt (YES WE HAVE ONE).

When kids must endure the brainwashing, or have the decisions of adults forced on them, in ways which will harm the kids for the rest of their lives.For examples
-forbidding or belittling education
-child marriage not being allowed
-sex education , well past puberty
-teaching kids to despise those who are different
-mocking their kids for having a disability,being female and fat
-When parents allow underage children to be subjected to anti-homosexual therapy in the name of the parents’ religion
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 3,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 113,
                'country_code' => 'ZW',
                'title' => "Promoting the rights of street children",
                'description' => "
Promoting the rights of street children
Street children live in poverty, lack access to basic services such as healthcare and education, and are unable to claim rights that they are not recognized.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 3,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 114,
                'country_code' => 'ZW',
                'title' => "How advocacy change children's lives",
                'description' => "Child advocates, who are also sometimes known as child rights advocates, play a deeply impactful role in improving the lives of children who have been victims of abuse. They help take responsibility for children and adolescents who have been removed from their homes, representing them in legal matters and helping them secure safe housing, supporting them through the foster system and work toward permanent placement with adoptive parents.
Child advocates  also provide critical support to children who have broken the law and face delinquency charges, who are also in great need of support and rehabilitation as they face the criminal justice system.
 There  are two primary types of child advocates,lawyers and social workers. The former takes responsibility for representing children in court, while the latter are primarily involved with ensuring that children in need of help end up in the best circumstances possible for them. This article will focus on the second category.
Peer education and advocacy through recreation and leadership is an intervention based on principles of peer helping and psychosocial rehabilitation. Trained peers working as recreation advocates provided support to peers in psychosocial rehabilitation settings.
Advocates promoted peer involvement in recreation and community activities as a strategy to enhance social support, independence, community inclusion, and quality of life. Evaluation findings indicate positive impacts on quality of life, empowerment and  employment.
It also included developing a peer training curriculum, expanded leadership roles for participants, and improved quality of recreation services available within psychosocial rehabilitation programs.
A  framework for political change and mobilization for the interests of children in a world living with HIV. Education, HIV prevention, treatment, social protection and financing are identified as five necessary components of the platform for effective advocacy around children and HIV.
-on education, there is the need to advocate for access to free, safe, comprehensive and quality basic education for all children, paying particular attention to the needs of girls, and ensuring that schools can play an effective role in HIV prevention and the protection and care of children in AIDS-affected societies.Therefore, bringing awareness to the young people to know their rights and knowledge in health sector on in preventing diseases.
-to prevent new infections among young people and children, the group stressed the urgent and rapid need to advocate for the increase of youth and child specific HIV prevention programmes, with a focus on ensuring access to comprehensive sexual education, empowering girls, and promoting gender equality.

youth empowerment
-youth advocacy is important because it creates a more responsible society. It can be used to raise awareness about what’s best for young people.
-It also  helps them find the information they need to make better decisions at a time when their opinions are still forming. This can help young people advocate for themselves as they grow into adulthood, and gives them the ability to understand contexts of social issues.
-It also helps teens understand how their actions can have an impact on others around them, and that they should take action on this information.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 3,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 115,
                'country_code' => 'ZW',
                'title' => "Obligations and responsibility",
                'description' => " In relation to health, for example:
-The government has a responsibility to ensure that sufficient resources are allocated for health care services, training of doctors and nurses, and ensuring that services are available for all children, wherever they live in the country.
-A hospital or clinic has a responsibility to provide a professional, efficient and inclusive health service for all children who need information, advice and treatment regarding their health.
-Health workers have a responsibility to treat all children with respect, without discrimination, and to ensure that the children are as fully involved in their own health care as possible.
-The family or caregiver has a responsibility to provide, as far as possible, a healthy environment for the child to grow up in, with sufficient food, care and shelter, and to ensure he/she gets access to health care whenever needed.
Children also have responsibilities:
To themselves – to do whatever they can to ensure their own safety, health and learning.
-To other children – to be caring, responsive and protective of other children and not act in ways that prevent their rights being realised,for example, bullying, or disruptive behaviour in school.
-To their families – to contribute to the life of the family, support their parents and show appropriate respect for elders.
-To their community – to contribute positively and as far as possible towards community life and their own environment.
However, it is important to remember that rights are ‘inalienable’ this means that they cannot be taken away. Rights are not dependent on children exercising responsibility. For example, children cannot be denied the right to health care because they have acted in ways that place their health at risk.
Children’s rights are a special case because many of the rights defined in the Convention on the Rights of the Child have to be provided by adults or the State. However, the Convention also refers to the “Responsibilities of children”, in particular to respect the rights of others, especially their parents (Article 29).
 In other words, If every child, regardless of their sex, ethnic origin, social status, language, age, nationality or religion has these rights, then he/she also has a responsibility to maturely exercise them, respect others in a humane way, and do whatever possible to ensure that others also enjoy the same essential rights.
Have you ever helped your mother cook? Or help dad wash the car.?
example that you are helping them
Doing house chores is not just the responsibility of one person. However, the assignments are a shared responsibility. You can share tasks with other family members. For example, mom is in charge of cooking, dad is in order of washing the car, the younger brother is in the amount of washing the dishes, and you are in charge of sweeping the floor.

.Listening to Parents' Advice
Parents are born first before the children. Parents also have more life experience than children. Sometimes, we need to pay more attention to the advice from parents. However, listening and incorporating it into your daily life is a good idea.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 3,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 116,
                'country_code' => 'ZW',
                'title' => "Advocacy ",
                'description' => "Advocacy is about getting the young ones voices heard and also their views
- A child advocates empowers children to understand their rights and also to  make informed decisions on matters concerning or that influence their lives
 Child rights based advocacy is a form of advocacy that focuses more on strengthening the child protection system. It aims at empowering commuties or society to protect children from being abused, descriminated or other forms of violence.
The advocacy most important task is to make sure that the children's rights are respected, fulfilled as well as to make suret that their wishes and voices are heard.It is also directed towards ensuring that all laws and polices comply with the rights and principles.
Advocacy also helps in expressing views or concerns to explore choices, to access information and services, to protect and promote rights.
-Put systems or laws that monitor the situation of children
-It is also directed towards ensuring that all laws and polices comply with the rights and principles
Why do advocacy
-demostrate the value of children
-encourage the states to recognize children's needs/rights including the disadvantaged children such as those living with disabilities
-Put systems or laws that monitor the situation of children
Examples of child's advocacy
-child led advocacy-empowers children to take part in advocating their rights
-legal advocacy -legal representation for children
-policy advocacy -advocating for policy changes that benefit children
-community based advocacy -working with community to identify and address issues that affect children
Children rights are represented by systems advocacy which focuses on changing thing on local , state or national level through laws and polices to change systems for the long term
Key advocacy activities
Promoting reform at the national level
Street children need strong legal protection, effective policies and appropriate interventions. Every country has a responsibility to put these in place in line with the obligations under the Convention on the Rights of the Child.
Commit to equality
Protect every child
Provide access to services
Create specialised solutions
CSC gives governments the tools and insights that they need to take these steps and make a difference to street children’s lives.It aslo  encourage governments to share knowledge and good practice on protecting and promoting the rights of street children with each other, with Uruguay being a leading example.
The children's rights advocacy provides free legal assistance to children who have been abused in conflict with the law and those in need for care and protection. It seeks to promote awareness and respect for children based in legal system and further the ability of the cevil society and the government to respond to their need and uphold their rights.",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 3,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 117,
                'country_code' => 'ZW',
                'title' => "Child rights",
                'description' => "A child is any person under the age of 18. Childrens rights are the rights of children which protects, guide and make sure of their safety. These are also the human rights of children regardless of gender, race and age. Children's rights include the right to health environment, education, recreation and the right to express themselves

 Examples of children's rights include
-no descrimination
-right to education
-freedom of thought and religion
-non descrimination
-protection from harm
- freedom of thought
-access to information that is to be fully aware of what is around them so to make informed decisions
-identity -children have the right to their own identity, an official record of who they are which includes their name, nationality and family relations. No one should take this away from them, but if this happens, governments must help children to quickly get their identity back.
Children must be treated with respect, equality and dignity without descrimination such as children with disability they should be involved and accepted in the community or in any spheres.They should be treated equally no matter who they are, where they live that is they should not be treated unfairly for any reason. They should also have the right of talking, writing as long as it does not affect anyone. These child rights supports the children and reduces the abuses that children face as they will be aware of steps that need to be taken when in a danger or threatening situation.
Children’s rights are civil and political rights, such as the right to identity, the right to a nationality. Children’s rights are economic, social and cultural rights, such as the right to education, the right to a decent standard of living, the right to health.


-the right to benefit from protection
Children’s rights consider the vulnerable character of the child. They imply the necessity to protect them. It means to grant particular assistance to them and to provide protection adapted to their age and to their degree of maturity.So the children have to be helped and supported and must be protected against labour exploitation, kidnapping, and ill-treatment.
In summation, the child's rights spells out the basic human rights that children everywhere have, the right to survival , to develop to the fullest , to protection to harmful influences, abuse and exploitation, to participate fully in family cultural and social life.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 3,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // 14 - Child safety & Abuse Awareness
            [
                'id' => 118,
                'country_code' => 'ZW',
                'title' => "A Poem of Awareness",
                'description' => "In a world so vast and wide,
Where children's dreams and hopes reside,
We must ensure their safety, dear,
And protect them from all that we fear.

Listen closely, young ones, to what I say,
For knowledge is power, it lights the way.
Let's learn about child safety today,
And keep danger and harm at bay.

First and foremost, remember this rule,
Never talk to strangers, don't be a fool.
If someone you don't know approaches you,
Run to a trusted adult, that's what you should do.

Online safety is crucial too,
As the internet can be a risky avenue.
Don't share personal info or meet unknown friends,
Stay vigilant and protect yourself till the end.

Bullying is a problem we must address,
No one deserves to feel distress.
Be kind to others, lend a helping hand,
Stand up against bullies, take a firm stand.
Abuse is an issue we must confront,
It's important to know when something's not right.
If someone hurts you or makes you feel scared,
Tell a grown-up you trust, they'll always be there.

Your body is precious, it belongs to you alone,
No one should touch it without your permission known.
Learn about boundaries and consent each day,
So you can protect yourself in every single way.

Now that you're aware of child safety's might,
Spread the knowledge with all your might.
Educate your friends, siblings, and peers,
Together we can create a world without fears.

Remember, dear young ones, you hold the key,
To keeping yourselves safe and happy.
Stay informed, stay alert, and always be wise,
For child safety is everyone's prize.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 4,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 119,
                'country_code' => 'ZW',
                'title' => "Child safety & Abuse Awareness",
                'description' => "Did you know that child safety and abuse awareness are crucial topics that require our attention and action? It is essential to educate ourselves and others about the signs of abuse, prevention strategies, and available resources. In this article , we will explore some interesting, educational, and entertaining facts about child safety and abuse awareness.

Did you know that child abuse can take various forms?

Child abuse is not limited to physical harm; it can also include emotional, sexual, or neglectful actions. Physical abuse involves causing physical harm or injury to a child. Emotional abuse refers to the persistent emotional mistreatment that can have long-lasting effects on a child's mental well-being. Sexual abuse involves any sexual activity with a child, including touching, exposure to explicit material, or exploitation. Neglect occurs when a caregiver fails to provide the necessary care and support for a child's well-being.

Did you know that recognizing the signs of abuse is crucial?

Recognizing the signs of abuse is essential for early intervention and protection of children. Some common indicators of physical abuse include unexplained bruises, burns, or fractures. Emotional abuse may manifest as low self-esteem, withdrawal from activities, or sudden changes in behavior. Signs of sexual abuse can include difficulty walking or sitting, nightmares, or sudden fear of certain individuals. Neglect may be indicated by poor hygiene, malnutrition, or frequent absences from school.

Did you know that prevention plays a vital role in child safety?

Prevention is key when it comes to ensuring the safety and well-being of children. Educating parents, caregivers, and communities about child safety measures can help prevent abuse from occurring in the first place. This includes teaching children about personal boundaries and safe touch, promoting open communication within families, and encouraging school_helpline of any suspicious behavior. Additionally, implementing policies and procedures in schools and organizations that prioritize child protection can contribute to prevention efforts.

Did you know that there are resources available for support and school_helpline?

If you suspect or witness child abuse, it is crucial to take action. There are many  helplines specifically dedicated to school_helpline any form of abuse and get helped YOUTH ADVOCATES has a youthhelpline 393 which you can call for free and the helpline provide guidance, support,information  and Referrals .Additionally, local child protective services agencies and law enforcement can assist in investigating and addressing cases of abuse.

Did you know that raising awareness is everyone's responsibility?

Raising awareness about child safety and abuse is not solely the responsibility of professionals or organizations; it is a collective effort. By sharing information, engaging in conversations, and supporting initiatives that promote child safety, we can create a safer environment for children. Together, we can break the silence surrounding child abuse and ensure that every child grows up in a nurturing and secure environment.

In conclusion, child safety and abuse awareness are critical topics that require our attention and action. By understanding the different forms of abuse, recognizing the signs, promoting prevention strategies, utilizing available resources, and raising awareness collectively, we can contribute to creating a safer world for children.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 4,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 120,
                'country_code' => 'ZW',
                'title' => "DOC-20230921-WA0080",
                'description' => "Introduction
As a young person, adolescent, or youth, it's important to be aware of your rights and how to protect yourself from potential dangers. Unfortunately, child abuse and neglect are still prevalent issues in our society today. According to the United Nations Children's Fund (UNICEF), more than 1 billion children worldwide experience physical, emotional, or sexual violence every year. In addition, the National Child Abuse and Neglect Data System (NCANDS) reports that in the United States alone, over 1,600 children die each year as a result of child abuse and neglect. These statistics are alarming and highlight the need for increased awareness and education around child safety and abuse prevention.
What is Child Abuse and Neglect?
Child abuse and neglect refer to any act or omission that causes harm or risk of harm to a child. This can include physical abuse, such as hitting or shaking, emotional abuse, such as name-calling or belittling, and sexual abuse, such as exposure or contact with explicit materials. Neglect can also be a form of abuse, including withholding basic needs like food, shelter, or medical care.
Signs of Child Abuse and Neglect
It's important to recognize the signs of child abuse and neglect so that you can report them to the appropriate authorities. Some common signs include:
* Unexplained injuries or bruises
* Behavioral changes, such as withdrawal or aggression
* Difficulty walking or sitting
* Poor hygiene or appearance
* Lack of adequate food, clothing, or shelter
* Inconsistent or unreliable caregivers
If you suspect that a child is being abused or neglected, it's important to speak up. You can report your concerns to local authorities, such as child protective services, or seek help from a trusted adult, such as a teacher, counselor, or healthcare provider.

How to Stay Safe
To stay safe, it's important to be aware of your surroundings and trust your instincts. Here are some tips to help you stay safe:
* Always tell a trusted adult if something doesn't feel right or if you're feeling unsafe.
* Don't talk to strangers or accept rides from people you don't know.
* Keep personal information private and don't share it with anyone online or in person.
* Be mindful of your online presence and avoid sharing explicit or personal photos or videos.
* Seek help if you're experiencing bullying or cyberbullying.
Youth Helpline
If you're looking for help or support, there are resources available to you. The Youth Advocate Programs (YAP) operates a helpline that provides free and confidential support to young people . The helpline is available 24/7 and can be reached at 393. to connect with a trained advocate.
Conclusion
Child safety and abuse awareness is an important issue that affects us all. As a young person, adolescent, or youth, it's important to be aware of your rights and how to protect yourself from potential dangers. Remember, it's always better to err on the side of caution and seek help if you suspect that someone is being abused or neglected.By working together, we can create a safer and more supportive community for all young people. If you or someone you know is in need of help, don't hesitate to reach out to 393 and get assisted.Together, we can make a difference.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 4,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 121,
                'country_code' => 'ZW',
                'title' => "Understanding and Addressing Abuse: A Guide for Young People",
                'description' => "Introduction:
Abuse is a serious issue that affects individuals of all ages, including young people, adolescents, and youths. It is crucial to raise awareness about abuse, educate young individuals on its various forms, and provide them with the necessary information to seek help. This article aims to inform, educate, and entertain young readers while shedding light on abuse awareness.
Understanding Abuse:
Abuse can manifest in different forms, including physical, emotional, sexual, and verbal abuse. Physical abuse involves any intentional act causing physical harm or injury. Emotional abuse refers to behaviors that manipulate or control someone's emotions or self-esteem. Sexual abuse encompasses any non-consensual sexual activity. Verbal abuse involves the use of words to belittle or demean someone.
Recognizing the Signs:
It is essential for young people to be able to recognize the signs of abuse in order to protect themselves and others. Common signs may include unexplained injuries, sudden changes in behavior or mood, withdrawal from social activities, fearfulness around certain individuals, and difficulty concentrating or performing well academically.
Seeking Help:
If you or someone you know is experiencing abuse, it is crucial to seek help immediately.There is a youthHelp Line provided by Youth Advocates (youthadvocates.org). The YouthHelp Line can be reached at 393 and offers free support and guidance for those seeking help as well as refferals.The YouthHelp Line is a confidential helpline specifically designed for young people facing various challenges, including abuse. Trained professionals are available 24/7 to listen, provide support, and offer guidance on how to address abusive situations. Whether it's discussing concerns about personal safety or seeking advice on how to help a friend who may be experiencing abuse, the YouthHelp Line is a reliable resource.
Educating Yourself:
To protect yourself from abuse, it is crucial to educate yourself about healthy relationships, consent, and personal boundaries. Understanding what constitutes a healthy relationship can help you identify red flags and make informed decisions about your own well-being. Learning about consent empowers you to establish and respect boundaries in all aspects of your life.
Supporting Others:
If you suspect someone you know is experiencing abuse, it is important to approach the situation with empathy and support. Encourage open communication, offer a listening ear, and let them know that help is available. Remember, it is not your responsibility to solve the problem, but rather to provide support and guide them towards seeking professional help.
Conclusion:
Abuse awareness is crucial for young people, adolescents, and youths. By understanding the different forms of abuse, recognizing the signs, and knowing where to seek help, individuals can protect themselves and support others who may be experiencing abuse. The YouthHelp Line provided by Youth Advocates (youthadvocates.org) at 393 offers a valuable resource for free support and guidance. Remember, no one deserves to be abused, and seeking help is a sign of strength.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 4,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 122,
                'country_code' => 'ZW',
                'title' => "Unpacking  Myths Around Child Safety and Abuse Awareness",
                'description' => "Introduction:
Child safety and abuse awareness are crucial topics that young people, adolescents, and youths need to be well-informed about. Unfortunately, there are several myths surrounding these issues that can hinder their understanding and ability to protect themselves and others. In this article, we will be disproving some common myths, providing educative, informative, and insights to empower young individuals.
Myth 1: Strangers are the primary threat to child safety.
Contrary to popular belief, most cases of child abuse occur within the child's circle of trust. According to studies conducted by reputable organizations such as the National Children's Alliance (NCA), approximately 90% of child sexual abuse cases involve someone known to the child. This could be a family member, friend, neighbor, or even a teacher. It is essential for young people to understand that danger can come from anyone, regardless of their familiarity.
Myth 2: Only physical abuse is harmful.
Child abuse encompasses various forms beyond physical harm. Emotional abuse, neglect, and sexual abuse are equally damaging and should not be overlooked. Emotional abuse can include constant criticism, humiliation, or belittlement, which can have long-lasting psychological effects on a child's development. Neglect refers to the failure of caregivers to provide basic needs such as food, shelter, clothing, or medical care. Sexual abuse involves any form of unwanted sexual contact or exposure. Young individuals must recognize the different types of abuse to identify potential signs and seek help when necessary.
Myth 3: Reporting abuse will make things worse.
One common misconception is that school_helpline abuse will only exacerbate the situation or lead to negative consequences for the victim. However, it is crucial for young people to understand that school_helpline abuse is essential for their own safety and well-being. By school_helpline incidents promptly, appropriate actions can be taken to protect them from further harm. Trusted adults, such as parents, teachers, or counselors, can provide support and guidance throughout the school_helpline process.
Myth 4: Child abuse only happens to certain types of children.
Child abuse does not discriminate based on race, gender, socioeconomic status, or any other factor. It can happen to any child, regardless of their background. It is important for young people to recognize that no one is immune to abuse and that everyone deserves to be safe and protected.
Myth 5: Child abuse is always obvious.
Child abuse is not always easily identifiable, as perpetrators often go to great lengths to hide their actions. Physical signs of abuse may not be apparent, and emotional or sexual abuse can leave no visible marks. Young individuals should be encouraged to trust their instincts and speak up if they feel uncomfortable or suspect someone else may be experiencing abuse.
Conclusion:
By debunking these myths surrounding child safety and abuse awareness, we hope to empower young people with accurate information that will enable them to protect themselves and others. It is crucial for young individuals to understand that danger can come from anyone, that various forms of abuse exist beyond physical harm, and that school_helpline abuse is essential for their own safety. By dispelling these misconceptions, we can create a safer environment for all children.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 4,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 123,
                'country_code' => 'ZW',
                'title' => "Sayings on Child Safety and Abuse Awareness: Empowering Young People",
                'description' => "Introduction:
Child safety and abuse awareness are crucial topics that every young person should be educated about. By understanding the signs of abuse, learning how to protect themselves, and supporting others, young people can play a vital role in creating a safer environment for children. In this article, we will explore some insightful sayings that promote child safety and abuse awareness, aiming to educate, inform, and entertain young people, adolescents, and youths.
 \"If you see something, say something\":
This saying emphasizes the importance of speaking up when witnessing any form of child abuse or unsafe situations. It encourages young people to trust their instincts and report any concerns to a trusted adult or authority figure. By doing so, they become advocates for the well-being of children and contribute to preventing further harm.
 \"Your voice has power\":
This saying reminds young people that their voices matter and can make a difference in protecting children from abuse. By speaking out against child abuse, sharing their experiences, or raising awareness through various platforms such as social media or community events, they can help break the silence surrounding this issue. Every voice counts in creating a safer world for children.
 \"Be a buddy, not a bystander\":
This saying encourages young people to actively intervene if they witness someone being mistreated or abused. By stepping in and offering support, they can provide comfort to the victim and deter potential abusers. Being an active bystander means standing up against injustice and ensuring the safety of others.
 \"Knowledge is power\":
Understanding the signs of child abuse is essential for prevention and early intervention. This saying emphasizes the importance of educating oneself about different forms of abuse, such as physical, emotional, sexual, or neglectful abuse. By being knowledgeable about these signs, young people can identify red flags and take appropriate action to protect themselves or others.
 \"Respect starts with you\":
Promoting respect and empathy towards children is crucial in preventing abuse. This saying reminds young people that they have the power to create a safe and nurturing environment for children by treating them with kindness, compassion, and respect. By modeling positive behavior, they can contribute to a culture that values the well-being of every child.
Conclusion:
Child safety and abuse awareness are essential topics that young people should be educated about. By embracing these sayings and incorporating them into their lives, young people can become advocates for child safety, actively work towards preventing abuse, and create a supportive environment for children. Remember, your voice matters, and together we can make a difference.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 4,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 124,
                'country_code' => 'ZW',
                'title' => "Effects of Child Abuse",
                'description' => "Introduction:
Child abuse is a grave issue that affects millions of children worldwide. It encompasses various forms such as physical, emotional, sexual, and neglect. The consequences of child abuse can be long-lasting and deeply impactful on a child's physical, emotional, and psychological well-being. This article aims to educate young people, adolescents, and youths about the effects of child abuse while providing valuable information on healing and prevention.
Physical Effects:
Physical abuse can result in immediate injuries such as bruises, broken bones, or burns. However, the effects can extend beyond the visible signs. Prolonged physical abuse can lead to chronic pain, and even permanent disabilities. Additionally, children who experience physical abuse may develop heightened aggression or become withdrawn due to fear.
 Emotional Effects:
Emotional abuse can have severe consequences on a child's mental health. Constant belittlement, humiliation, or rejection can lead to low self-esteem, depression, anxiety disorders, and even suicidal tendencies. These emotional scars often persist into adulthood and impact relationships and overall life satisfaction.
Sexual Effects:
Sexual abuse has devastating effects on a child's emotional and psychological well-being. Victims may experience feelings of shame, guilt, confusion, and self-blame. They may also suffer from post-traumatic stress disorder (PTSD), sexual dysfunction, eating disorders, or engage in self-harming behaviors. It is crucial for survivors to seek professional help to address these issues and begin the healing process.
Cognitive Effects:
Child abuse can significantly impact a child's cognitive development. Studies have shown that abused children may experience difficulties in concentration, memory retention, problem-solving skills, and academic performance. These cognitive impairments can hinder their educational progress and limit future opportunities.
Social Effects:
Child abuse often disrupts a child's social development, leading to difficulties in forming healthy relationships and trusting others. Survivors may struggle with intimacy, exhibit aggressive or antisocial behaviors, or become isolated from peers. These social challenges can have long-term consequences on their overall well-being and ability to navigate the world.
Prevention and Healing:
Preventing child abuse requires a collective effort from society. Education and awareness campaigns play a crucial role in identifying and school_helpline abuse cases. Young people should be encouraged to speak up if they witness or experience any form of abuse. Additionally, providing support systems such as counseling services, helplines, and safe spaces can aid survivors in their healing journey.
Conclusion:
Child abuse is a deeply concerning issue that affects countless children worldwide. By understanding the various forms of abuse and their effects, young people can play an active role in preventing abuse and supporting survivors. It is essential to break the cycle of abuse by promoting education, awareness, and empathy within our communities.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 4,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 125,
                'country_code' => 'ZW',
                'title' => "Raising Awareness on Internet Safety and its Effects",
                'description' => "Introduction:
In today's digital age, the internet has become an integral part of our lives, offering countless opportunities for learning, communication, and entertainment. However, it also poses significant risks, especially for children. With the increasing prevalence of online activities among young individuals, it is crucial to prioritize child safety and abuse awareness in the virtual world. This article aims to shed light on the importance of internet safety for children and provide valuable insights into its effects.
 The Dangers Lurking Online:
The internet exposes children to various dangers, including cyberbullying, online predators, inappropriate content, and identity theft. Cyberbullying can have severe psychological effects on children, leading to anxiety, depression, and even suicide in extreme cases. Online predators exploit the anonymity of the internet to groom and exploit vulnerable children. Additionally, exposure to explicit or violent content can negatively impact a child's emotional well-being and development.
 Establishing a Safe Online Environment:
To protect children from online threats, it is essential for parents and guardians to establish a safe online environment. This can be achieved through open communication, setting clear boundaries, and educating children about potential risks. Encouraging responsible internet use and teaching them about privacy settings, strong passwords, and safe browsing habits are crucial steps in ensuring their safety.
 Educating Children about Online Safety:
Children need to be educated about online safety from an early age. Teaching them about the importance of not sharing personal information with strangers online, recognizing warning signs of cyberbullying or grooming attempts, and school_helpline any suspicious activities are vital aspects of their digital literacy. Engaging in regular conversations about their online experiences can help identify potential issues before they escalate.
. Parental Control Tools:
Utilizing parental control tools can significantly enhance child safety online. These tools allow parents to monitor their child's internet usage, block inappropriate content, and set time limits. By using these tools responsibly, parents can strike a balance between allowing their children to explore the internet and ensuring their safety.
 Collaborating with Schools and Communities:
Creating a safe online environment for children requires collaboration between parents, schools, and communities. Schools should incorporate internet safety education into their curriculum, teaching children about responsible online behavior and the potential risks they may encounter. Community organizations can also play a vital role by organizing workshops and awareness campaigns to educate parents and children about internet safety.
Conclusion:
As the internet continues to evolve, it is crucial to prioritize child safety and abuse awareness in the digital realm. By understanding the dangers lurking online and implementing proactive measures such as open communication, education, parental control tools, and community collaboration, we can create a safer online environment for our children.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 4,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 126,
                'country_code' => 'ZW',
                'title' => "DOC-202309209-WA0116",
                'description' => "Introduction
Child safety is a paramount concern in today's world. Protecting children from various risks and dangers requires a collective effort from parents, educators, communities, and society at large. By fostering awareness and implementing effective safety measures, we can create a secure environment for children to thrive and grow.Child abuse is defined as any act that results in harm or risk of harm to a child. This can include physical abuse, sexual abuse, emotional abuse, and neglect.

Education on Personal Safety :
Educating children about personal safety is crucial in empowering them to protect themselves. Teach children about their bodies, appropriate touch, and the importance of setting boundaries. Encourage open communication, so they feel comfortable discussing any concerns or uncomfortable situations. Educate them about potential dangers, such as strangers, online risks, and the importance of privacy. By providing age-appropriate information, we equip children with the knowledge and skills needed to make informed decisions.

Internet Safety :
In today's digital age, children are exposed to various online risks. Parents and caregivers must guide children on safe internet usage. Encourage responsible online behavior, including not sharing personal information or engaging in conversations with strangers. Monitor their online activities and set boundaries on screen time. Teach them about cyberbullying and the importance of school_helpline any inappropriate content or interactions. By fostering digital literacy and establishing a safe online environment, we can minimize the potential risks associated with internet usage.
Home and Environment Safety :
Creating a safe home and environment is essential for child protection. Secure potentially dangerous items, such as cleaning products, medications, and sharp objects, out of children's reach.Teach children about abuse and empowering them so that they stay safe.Teacb them how to dial emergency services. By promoting a safe physical environment, we reduce the likelihood of accidents and injuries.

 Community Engagement :
Child safety is a collective responsibility. Encourage community involvement in promoting child safety. Engage with local schools, organizations, and law enforcement agencies to organize workshops and awareness campaigns. Support initiatives that aim to prevent child abuse, bullying, and neglect. Establish neighborhood watch programs to enhance community surveillance. By fostering a culture of vigilance and cooperation, we can create a protective network that prioritizes the well-being of every child.

Conclusion :
Protecting children requires a comprehensive approach that focuses on awareness, education, and proactive safety measures. By equipping children with the necessary knowledge, fostering safe online practices, creating secure physical environments, and engaging communities, we can ensure the safety and well-being of our children.The after effects of child abuse can be difficult to overcome, and in some cases, they may never go away completely. However, it is important to remember that healing and recovery are possible. There are many resources available to help children who have been abused, and there are many people who are dedicated to helping children heal. The most important thing is to never abuse children in the first place. Children deserve to be loved and cared for, and they should never have to experience the trauma of abuse. Let's all work together to make sure that every child is safe and protected from harm. Together, let's build a world where every child can thrive without fear.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 4,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 127,
                'country_code' => 'ZW',
                'title' => "DOC-10230920-WA0017",
                'description' => "Introduction
Hello there, my young friends! Today, we're going to learn about child safety and abuse awareness to help you stay safe ,strong and informed. Child safety means taking steps to protect yourself from harm, while abuse awareness means knowing about different kinds of mistreatment and how to prevent them. Let's dive in and become safety superheroes!
Child Safety: Protecting Yourself
Child safety means making sure you're safe from things that can hurt you. It's important to know the difference between safe and unsafe situations. Trust your instincts ,that's your inner voice telling you if something feels wrong ,our feelings are valid, and you have the power to protect yourself. Remember, it's okay to say \"no\" to anything that makes you uncomfortable . If you feel uncomfortable or scared, talk to a trusted adult, like your parents, teachers, guardian or even friends. They are there to listen, help, and protect us.
Abuse Awareness: Recognizing Mistreatment :
Abuse means when someone hurts you in any way or makes you feel bad on purpose. It's important to know the different types of abuse, such as physical, verbal, or emotional abuse. Physical abuse is when someone hurts your body, like hitting or pushing. Verbal abuse is when someone says mean things to you, and emotional abuse is when someone makes you feel scared or worthless. Remember, no one has the right to hurt or mistreat you.Also know that everyone has personal boundaries, which define what is acceptable and what is not. It is essential to set and communicate your boundaries to others. If someone crosses those boundaries or tries to pressure you into doing something that feels wrong, remember that it's okay to say \"no\" and remove yourself from that situation, if that person insist on doing that please report.
 Internet Safety:
The internet can be a wonderful resource, but it's crucial to use it safely. Never share personal information, such as your full name, address, or phone number, with strangers online. Be cautious when chatting with people you don't know, as they may not be who they claim to be. If anyone online makes you feel uncomfortable or asks you to do something that feels wrong, notify a trusted adult immediately
Speaking Up and Seeking Help :
If something doesn't feel right or if someone is hurting you, it's crucial to speak up and seek help.Don't keep harmful secrets. If someone tells you to keep a secret that feels wrong or makes you sad, it's essential to speak up. Share it with a trusted adult you trust, like your parents ,guardian, a teacher or friends. They will help you stay safe and protect others from harm, they will listen and support you. Remember, it's never your fault if someone hurts you or makes you feel bad . If you do not report what is happening to you, the person who is hurting you may continue to do so, and their actions may become more severe. You may also experience feelings of guilt, shame, and loneliness if you do not tell someone what is happening to you. There are people who are trained to help children in situations like yours, and they can provide you with the support and protection you need. It is important to speak up and get help, even if you are scared or worried about what will happen. You have the right to be safe and protected.
Building a Safety Network :
Creating a safety network means surrounding yourself with people who care and can help keep you safe. These can be your family, friends, teachers, or other adults you trust. Share your concerns with them, and they will help you find solutions.
Conclusion :
You've become safety superheroes, my young friends! By understanding child safety and abuse awareness, you can protect yourself and others. Remember to trust your instincts,set personal boundaries, recognize mistreatment, speak up, practice internet safety, and seek help from trusted adults. Stay safe, strong, and remember that you deserve to be protected and cherished.Always note that there are many dangers associated with not school_helpline abuse.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 4,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // 15 - Consent & Healthy relationships
            [
                'id' => 128,
                'country_code' => 'ZW',
                'title' => "What makes up a healthy relationship?",
                'description' => "•	A healthy relationship is characterized by several key qualities that contribute to the well-being and happiness of both partners involved. Here are some aspects of a healthy relationship:
•	Communication: Open and honest communication is essential. Both partners should feel comfortable expressing their thoughts, feelings, needs, and concerns without fear of judgment or reprisal. Effective communication involves active listening, empathy, and respectful dialogue.
•	 Trust and transparency: Trust is the foundation of a healthy relationship. Partners should trust each other's words, actions, and intentions. Transparency in sharing important information, being reliable and consistent, and honoring commitments helps build and maintain trust.
•	Mutual respect: Each partner should value and respect the other's opinions, boundaries, and individuality. Respect involves recognizing and appreciating each other's strengths, differences, and autonomy.
•	 Equality and fairness: A healthy relationship is based on equality, where both partners have equal voice, decision-making power, and influence. Fairness means distributing responsibilities, resources, and compromises in a balanced manner.
•	Support and empathy: Partners should provide emotional support, understanding, and empathy for each other. Being there during challenging times, celebrating successes, and validating each other's experiences are important aspects of a healthy relationship.
•	Independent identities: While being in a relationship, it's crucial for individuals to maintain their own interests, hobbies, friendships, and personal growth. Both partners should support and encourage each other's individuality and allow space for personal development.
•	Conflict resolution: Conflicts are natural in any relationship, but healthy couples learn how to resolve conflicts constructively. This involves active listening, compromise, seeking common ground, and finding mutually satisfactory solutions.
•	Intimacy and affection: A healthy relationship includes a strong emotional and physical connection. This can be expressed through affectionate gestures, quality time spent together, and a fulfilling sexual relationship.
•	Shared values and goals: Partners with shared values and compatible life goals tend to have stronger relationships. Aligning on important aspects such as family, career, finances, and long-term plans contributes to the stability and harmony of the relationship.
•	Continuous growth and adaptation: Healthy relationships require ongoing effort and commitment from both partners. Understanding that people change over time and being willing to adapt, learn, and grow together is crucial for the long-term success and satisfaction of the relationship.
•	Remember, every relationship is unique, and what constitutes a healthy relationship may vary for different couples. It's important to establish and communicate your own expectations, while also considering the needs and desires of your partner.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 6,
                'author_id' => 5,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 129,
                'country_code' => 'ZW',
                'title' => "What are unhealthy relationships?",
                'description' => "•	Unhealthy relationships are characterized by toxic patterns and behaviors that can be harmful to one or both partners involved. Here are some signs of an unhealthy relationship:
Lack of communication: Poor communication, such as avoiding important discussions, stonewalling, or engaging in constant arguments without resolution, can indicate an unhealthy
•	 .Disrespect and disregard: Partners who disrespect each other's boundaries, opinions, or feelings, regularly criticize or belittle one another, or engage in controlling behaviors, exhibitsigns of an unhealthy relationship.
•	Manipulation and control: Manipulative behavior, such as emotional blackmail, guilt-tripping, isolating the partner from friends or family, or making all the decisions without considering the other person's input, is a major red flag.
•	Lack of trust: Relationships without trust are unhealthy. This can include consistent lying, secrecy, infidelity, or constantly doubting and questioning the partner's motives and integrity.
•	Imbalance of power: When one partner consistently holds power and control over the other, causing an imbalance in decision-making, financial autonomy, or freedom, it indicates an unhealthy relationship.
•	 Emotional or physical abuse: Any form of abuse, whether emotional, verbal, physical, or sexual, is completely unacceptable and indicates an extremely unhealthy and dangerous relationship.
•	Feeling constantly unhappy or drained: If a relationship consistently brings about negative emotions, sadness, anxiety, stress, or leaves you feeling drained and emotionally exhausted, it may be an indication of an unhealthy dynamic.
•	Lack of support: A healthy relationship should involve emotional support, encouragement, and validation. If a partner consistently undermines, dismisses, or sabotages the other's goals, dreams, or well-being, it is not a healthy relationship.
•	Inability to resolve conflicts: Constant unresolved conflicts or a pattern of escalating arguments without any progress or resolution can indicate an unhealthy relationship.
•	Isolation from others: If a partner consistently isolates the other from friends, family, or support networks, limiting their social interactions or independence, it can indicate an unhealthy and potentially abusive relationship.

It's important to remember that no one deserves to be in an unhealthy relationship. If you recognize any of these signs in your relationship, it may be helpful to seek support from trusted friends, family, or professionals in order to evaluate the situation and determine the best course of action for your well-being.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 6,
                'author_id' => 5,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 130,
                'country_code' => 'ZW',
                'title' => "The reality of situationships",
                'description' => "A situationship is a romantic relationship that lacks clear definitions or commitment. It’s characterized by emotional intimacy, spending time together, and often involves a physical and sexual component. However, partners won’t define their relationship, place it into a category, or set clear boundaries. A situation ship can cause uncertainty, anxiety, and confusion about the future of the relationship.
Examples of Situationships
A situation ship can take many forms
Two people may be dating and spending time together, but have not defined the relationship parameters.
They may have physical intimacy but also see other people. The individuals may not want to risk their friendship by committing to a relationship so they will spend time together and see how it develops.
The individuals may have started dating just before one of them has to move away and agree to keep things casual until they can see each other again.
 Additionally, the two may have started dating during a stressful time in their lives, such as post breakup, and don’t want to add the pressure of a committed relationship.
6 Signs You May Be In a Situationship
1.	You Don’t Put a Label on Your Relationship
2.	you Don’t Make Long-Term Plans
3.	They’re Seeing Other People
4.	 You Aren’t Introduced to Friends or Family
5.	Pros & Cons of Situation ships
6.	Situationships, like all relationships, have their advantages and disadvantages. This approach offers the benefits of emotional and physical intimacy without the pressures of commitment. However, it can also be confusing and uncertain. While anyone can engage in a situationship, some populations, such as those who prioritize their career or personal goals, may be better suited for this type of relationship. It is up to each individual to decide what type of relationship works best for them.
Advantages of a Situationship
Situation ships can be good for individuals who are not yet ready or interested in a committed, long-term relationship. It can provide emotional and physical intimacy without the need for traditional relationship responsibilities. This approach can be appealing for those who have demanding careers, busy lifestyles, or who are not ready to settle down.
Moreover, situation ships can offer individuals the freedom to explore and experiment with different types of relationships. They may be similar to “friends with benefits” situations, where both parties are happy with the level of intimacy and lack of commitment.
7.	Disadvantages of a Situationship
Situation ships can be harmful to individuals if they are not prepared for this special type of relationship. The instability and ambiguity can increase a person’s stress and anxiety, particularly if they are insecure about how the person feels toward them. The lack of clear boundaries can also make it difficult to establish trust and build a strong emotional connection.
8.	Situationships can be emotionally draining, particularly if one partner is more invested in the relationship than the other. Feelings of insecurity, loneliness, and rejection can have a negative impact on mental health.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 6,
                'author_id' => 5,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 131,
                'country_code' => 'ZW',
                'title' => "THE ISSUE OF CONSENT IN ZIMBABWE",
                'description' => "
•	In Zimbabwe, the issue of consent is an important aspect when addressing child abuse, sexual assault, and any form of non-consensual acts. According to the laws of Zimbabwe, the age of consent for sexual activity is set at 16 years old. This means that individuals under the age of 16 are legally unable to give consent to engage in sexual activity.
•	It is crucial to recognize that any sexual activity or involvement with a person under the age of 16, regardless of the circumstances, is considered illegal and can be classified as child abuse or statutory rape. The law aims to protect minors from exploitation, abuse, and potential harm.
•	Additionally, it's important to note that consent should always be freely given, informed, and enthusiastic for any sexual activity involving individuals who are of legal age. Lack of consent or coercion is a serious violation of a person's rights and can lead to criminal charges.
•	To address issues related to consent and child abuse in Zimbabwe, it is essential to promote awareness, education, and provide support networks for survivors. This includes proper school_helpline mechanisms, access to counseling services, and legal avenues for justice.
•	If you suspect or become aware of any instances of child abuse or sexual assault, it is important to report it to the appropriate authorities, such as the police or child protection agencies, who can take the necessary actions to protect the child and seek justice.
Consent in relationships refers to the voluntary agreement and mutual understanding between individuals to engage in any form of sexual activity or intimate acts. It is the clear and enthusiastic affirmation given by all parties involved, where each person feels comfortable, respected, and willing to participate.
Consent should always be:

1. Freely given: Consent must be given without any form of manipulation, coercion, or pressure. It should not be obtained through threats, intimidation, or emotional manipulation.

2. Informed: Consent requires that all parties involved have a clear understanding of what they are agreeing to. This means being aware of the specific sexual activity, potential risks or consequences, and having the capacity to make an informed decision.

3. Reversible: Consent is not a one-time, permanent agreement. It can be withdrawn at any point during any sexual activity. If someone no longer wishes to participate, it is essential to respect their decision without question or guilt.

4. Enthusiastic: Consent should be expressed willingly and with genuine enthusiasm. It is important to ensure that all parties involved are actively engaging in the interaction and genuinely interested in participating.

In healthy relationships, consent should be an ongoing process of communication and mutual respect. It is crucial to have open discussions about boundaries, desires, and comfort levels to ensure that both partners feel safe and empowered.

It's important to remember that consent is not just a legal requirement but also an ethical and moral responsibility. Consent is a cornerstone of healthy relationships, promoting trust, respect, and the well-being of all individuals involved.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 6,
                'author_id' => 5,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 132,
                'country_code' => 'ZW',
                'title' => "The Devastating effects of Mjolo-the pandemic",
                'description' => "\"Mjolo\" is a term commonly used in South Africa to refer to dating, courtship, or being in a romantic relationship. It is primarily used in various South African languages, including Zulu, Xhosa, and Ndebele. The term encompasses the different stages and dynamics involved in romantic relationships, such as getting to know someone, going on dates, building emotional connections, and potentially pursuing a long-term partnership. It signifies the process of finding love and companionship.
While mjolo, or dating, can be a positive and enriching experience for young people, it can also have some devastating effects if not approached with caution. Here are a few potential negative impacts that mjolo can have on young individuals:

1. Emotional Distress: When relationships do not work out as expected or one partner is not sincere, it can lead to emotional pain, heartbreak, and distress. This can result in lowered self-esteem and affect overall mental wellbeing.

    2. Academic Performance: Engaging in excessive or unhealthy dating habits can distract young people from their studies, leading to a decline in academic performance. Balancing romantic relationships and educational responsibilities can be challenging without proper time management.

    3. Peer Pressure: The desire to fit in or impress others can often drive young people to enter into relationships that may not be healthy or suitable for them. Peer pressure can lead to poor decision-making and involvement in risky behaviors.

    4. Unrealistic Expectations: The influence of social media and other external factors can create unrealistic expectations about relationships. Young people may feel pressured to live up to unrealistic standards, leading to dissatisfaction or disappointment in their own relationships.

    5. Vulnerability to Abuse: In some cases, young people may become victims of abusive relationships, whether physically, emotionally, or verbally. Lack of experience and awareness can make it harder for them to recognize the signs of abuse and seek help.

    It's important for young people to approach dating with maturity, self-awareness, and care. Building healthy relationships requires open communication, respect, and mutual consent. Seeking guidance from trusted adults, such as parents or mentors, can provide valuable support and guidance during this stage of life.
Dealing with mjolo, or dating, can be a challenging process, but there are steps you can take to navigate it in a healthy and positive way. Here are some suggestions:

1. Set Boundaries: Establish clear personal boundaries and communicate them to your partner. This includes defining what you are comfortable with in terms of physical intimacy, communication, and time commitments. Boundaries help establish mutual respect and ensure both partners feel safe and comfortable.

2. Prioritize Self-Care: Take care of your own well-being, both physically and mentally. Make sure you have a support system in place, engage in activities that bring you joy, and prioritize your own growth and development outside of the relationship.

3. Communication is Key: Open and honest communication is vital in any relationship. Be transparent about your feelings, expectations, and concerns with your partner. Effective communication helps build trust, resolve conflicts, and maintain a healthy connection.

4. Practice Consent: Always prioritize consent in all aspects of your relationship. Mutual agreement and respect for each other's boundaries are crucial. Communicate your wants and needs, and listen actively when your partner does the same.

    5. Take Things Slow: It's essential not to rush into anything without taking the time to get to know your partner. Building a strong foundation takes time and patience. Allow the relationship to develop naturally and gradually.

6. Seek Support: If you are struggling with any aspect of your relationship, don't hesitate to seek support from trusted friends, family members, or professionals such as counselors or therapists. They can provide guidance, perspective, and advice that can be invaluable during difficult times.

    Remember, every relationship is unique, and it's important to find what works best for you. Trust your instincts, maintain your individuality, and choose partners who respect and value you.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 6,
                'author_id' => 5,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 133,
                'country_code' => 'ZW',
                'title' => "The age of Consent In Zimbabwe",
                'description' => "In Zimbabwe, the age of consent is 16 years old. This means that individuals who are 16 years of age or older are considered legally able to give informed consent to engage in any sexual activity. It's important to note that engaging in any sexual activity with a person below the age of consent is considered a criminal offense, such as statutory rape, regardless of whether or not the younger person gives their consent. It's crucial to always respect and abide by the laws regarding consent and age of consent in your country or region.
World Vision, a Christian relief, development and advocacy organisation dedicated to working with children, families and communities to overcome poverty and injustice, welcomes the Constitutional Court Ruling on Raising the Age of Consent to Sex from 16 years to 18 years and enacting of the Marriage Act in Zimbabwe. This shows great efforts by the Government of Zimbabwe towards the protection of children against sexual violence and aligning the country’s laws to the progressive 2013 Constitution of Zimbabwe.
On 24 May, 2022, Zimbabwe’s Constitutional Court (Concourt) ruled that the legal age of sexual consent be increased from 16 to 18 years old. The (Concourt) judgement struck down the Criminal Law that set the age of consent to sex at 16 as unconstitutional.
In 2016, the same Concourt declared that Section 78 (1) of the Constitution sets 18 years as the minimum age of marriage and that any law to the contrary was unconstitutional.
Previously, the legal age of consent was set at 16 which meant taking legal action against perpetrators marrying children below the age of 18 or those sexually abusing children was difficult.
This will protect millions of children, especially girls, who bear the brunt of child marriage as a result of various religious, social and cultural harmful practices.
As we applaud these and other policy achievements by the Government of Zimbabwe, World Vision and other like-minded organisations calls upon the Legislature, Ministry of Justice, Legal and Parliamentary Affairs including relevant stakeholders to expedite the alignment process of the Criminal Law.
What is the age of consent to marriage in Zimbabwe?
AGE OF CONSENT TO MARRY

Section 78(1) of the Constitution of Zimbabwe provides that only persons who have attained the age of 18 have the right to found a family. This was tested and confirmed in a landmark Constitutional Court case decision in 2016 to also mean entering a marriage
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 6,
                'author_id' => 5,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 134,
                'country_code' => 'ZW',
                'title' => "SURVIVING HEARTBREAKS MALE VS FEMALE",
                'description' => "Men may deal with more intense heartaches compared to their female counterparts when their relationships take a turn for the worse, a new study suggests.

Because the ideals of toxic masculinity force them to suppress their emotions. “Many men go into their metaphorical ‘man cave’ after a break-up to shield themselves from the emotional impact of the loss. Many men feel the social pressure to ‘man up’ and move on, rather than dwelling on the emotions. This only serves to prolong the experience of loss and extends their period of grief
Signs of a Broken Heart
If your heart is broken, you might feel symptoms common to depression:
•	Fatigue
•	Reduced or increased appetite
•	Sleeping too little or too much
•	Lack of interest in your usual activities
•	Anxiety

HOW FEMALES CAN SURVIVE HEART BREAKS ?
Some things to help you after a break up:
1.	Give yourself some space
2.	Keep busy
3.	Take time out for you.
4.	Talk to family, friends, Elders and others who can support you
5.	Try not to use alcohol and other drugs to deal with the pain
6.	Give it timE
7.	Try to look after yourself.

When you’re ready for the next step, here are some tips to get through the process of healing.

Dos
•	Do take care of yourself.
•	Do appreciate the good memories.
•	Do reevaluate your needs.
•	Do try again when you're ready.
•	Do forgive—both the other person and yourself.

Don'ts
•	Don't let your emotions rule.
•	Don't get stuck in the past.
•	Don't deny your needs.
•	Don't jump into a rebound relationship.




",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 6,
                'author_id' => 5,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 135,
                'country_code' => 'ZW',
                'title' => "SEX BEFORE MARRIAGE -RIGHT OR WRONG?",
                'description' => "The question of whether sex before marriage is right or wrong is subjective and can vary depending on personal beliefs, cultural norms, and religious teachings. Different people and societies hold different perspectives on this matter. It's essential to approach the topic with an open mind and respect diverse opinions.

Some individuals and religions promote the idea of saving sex for marriage as a way to uphold traditional values, maintain physical and emotional purity, and establish a deeper level of commitment within a relationship. They may believe that abstaining from premarital sex can lead to stronger marriages and avoid potential negative consequences such as unintended pregnancies or sexually transmitted infections.

On the other hand, many people also engage in consensual sexual relationships before marriage. They may view sex as a natural and healthy expression of love and intimacy between two committed partners. They focus on building mutual trust, communication, and shared values within their relationship, rather than placing emphasis on marital status.

Ultimately, it is up to individuals to make decisions about their own bodies and relationships based on their personal values, beliefs, and circumstances. It's important to have open and honest conversations with your partner about your expectations, boundaries, and intentions surrounding sex to ensure that both parties are comfortable and consenting.

Regardless of personal beliefs, it's crucial to prioritize consent, communicate openly, and ensure that all sexual activities are consensual, safe, and respectful of each individual's autonomy and well-being.

Before engaging in sexual activity, it is important to consider several factors to ensure a positive and healthy experience. Here are some things to consider:

1. **Consent**: Consent is the key foundation of any sexual activity. Both parties must freely and willingly agree to engage in sexual activities without feeling pressured or coerced. It's important to communicate openly and obtain clear and enthusiastic consent from your partner.

2. **Emotional readiness**: Consider your emotional state and that of your partner. Are you both ready for a sexual relationship? Take the time to understand your own feelings and ensure that you have a strong level of trust, respect, and communication within the relationship.

3. **Communication**: Open and honest communication with your partner is crucial. Discuss your expectations, boundaries, desires, and concerns. Make sure you are on the same page regarding what you both want from the experience and what you are comfortable with.

4. **Protection and contraception**: If you are not ready to start a family, it's important to consider using contraception methods to prevent unintended pregnancies and protect against sexually transmitted infections (STIs). Consult with a healthcare professional to choose the most appropriate method for you and your partner.

5. **STI testing**: Before engaging in sexual activity, it's a good idea for both partners to undergo STI testing to ensure a safe and healthy experience. This helps to protect your own health as well as your partner's.

6. **Physical preparedness**: Consider if you and your partner are physically ready for sexual activity. Educate yourselves about the human body, consent, and respectful conduct. Take things at a pace that feels comfortable for both of you and make sure to prioritize each other's pleasure and comfort.

Remember, this list is not exhaustive, and everyone's circumstances and values may differ. What's most important is that both partners are on the same page, fully informed, and comfortable with their decisions and actions. Open and ongoing communication with your partner is key to cultivating a healthy and enjoyable sexual relationship.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 6,
                'author_id' => 5,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 136,
                'country_code' => 'ZW',
                'title' => "PROS AND CONS OF LOVE RELATIONSHIP AT THE WORKPLACE",
                'description' => "Love relationships at the workplace can have both pros and cons. Here are some of them:

Pros:
1. Emotional support: Being in a relationship with a coworker can provide emotional support, as you both understand the challenges and successes of your work environment. This support can enhance your overall well-being and job satisfaction.

2. Collaboration and teamwork: When two individuals in a relationship work together, they often have a strong sense of collaboration and teamwork. They may be more inclined to communicate effectively, share ideas, and work towards common goals.

3. Increased productivity: A positive relationship between coworkers can lead to increased productivity. Couples who support and motivate each other in the workplace are likely to perform better individually and contribute positively to team dynamics.


Cons:
1. Workplace distractions: While a love relationship can bring happiness, it can also become a source of distraction. Emotional conflicts or personal issues can negatively impact work performance, productivity, and focus.

2. Favoritism and bias: A romantic relationship between coworkers can create perceptions of favoritism, unfair treatment, or biased decision-making. This can affect team dynamics, morale, and lead to resentment among other colleagues.

3. Confidentiality concerns: Sharing personal information or work-related details with a romantic partner at work can create potential breaches of confidentiality and compromise professionalism. It is important to maintain boundaries and separate personal and professional matters.

4. Organizational policies: Many companies have policies regarding workplace relationships, which could limit or prohibit romantic involvement between employees. Violating these policies can lead to disciplinary action or even termination of employment.

It is crucial to consider the potential impact on both your personal and professional life before engaging in a love relationship at the workplace. Careful communication, maintaining professionalism, and adhering to company policies can help navigate any challenges that may
Arise.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 6,
                'author_id' => 5,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 137,
                'country_code' => 'ZW',
                'title' => "ONLINE DATING -THREAT OR BLESSING ?",
                'description' => "Online dating is a method of meeting and connecting with potential romantic or sexual partners through the internet. It allows individuals to create profiles on dating websites or apps, where they can provide information about themselves, upload photos, and search for other individuals who match their preferences.
The process typically involves creating a profile that includes details about personal interests, hobbies, physical appearance, and relationship preferences. Users can then browse through the profiles of other members and initiate contact by sending messages or expressing interest. This virtual interaction often leads to getting to know each other better before deciding to meet offline.

The perception of online dating as a threat or a blessing can vary depending on individual experiences and perspectives. It is important to consider both the advantages and potential challenges it may present.

Online dating can be seen as a blessing because:

1. Increased opportunities: It expands the pool of potential partners beyond one's immediate social circle, allowing individuals to meet people they may not have encountered otherwise.
2. Convenience: Online dating provides a convenient and accessible way to connect with others from the comfort of one's own home. It eliminates geographical limitations and allows for communication at any time.
3. Compatibility-focused: Many online dating platforms use algorithms and matching systems to help users find individuals who are more likely to be compatible with them based on shared interests, values, and preferences.

However, it is also important to consider the potential threats:

1. Safety concerns: Online dating involves interacting with strangers, which can pose safety risks if proper precautions are not taken. Users should be cautious about sharing personal information too quickly and always prioritize meeting in public places.
2. Misrepresentation: Some individuals may not be completely truthful in their online profiles, exaggerating certain qualities or even using fake identities. This can lead to disappointment or even potential dangers.
3. Overwhelming options: The abundance of potential matches can sometimes lead to decision fatigue or a sense of being overwhelmed, making it challenging to focus on developing a connection with one person.

Ultimately, whether online dating is seen as a threat or a blessing will depend on an individual's experiences and how they navigate the online dating landscape. By approaching it with caution, being mindful of personal safety, and managing expectations, it can be a valuable tool for connecting with others and potentially finding meaningful relationships..
By Leon Matewa
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 6,
                'author_id' => 5,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 138,
                'country_code' => 'ZW',
                'title' => "HOW TO SOLVE CONFLICTS IN RELATIONSHIP?",
                'description' => "
Conflict is a disagreement between two or more people. It can be caused by a variety of factors, including differences in opinion, needs, or values. Conflict can be either constructive or destructive, depending on how it is managed.

When conflict is managed in a positive and constructive way, it can lead to greater understanding and better relationships. On the other hand, when conflict is managed in a negative and destructive way, it can lead to resentment, anger, and even violence. The key to managing conflict effectively is to understand the root cause of the conflict and to work together to find a solution that is acceptable to all parties involved.

There are a few key steps to solving conflicts in a relationship. First, it's important to take some time to calm down and approach the issue with a level head. Second, listen to your partner and try to understand their perspective. Third, be clear and honest about your own feelings and needs. Fourth, work together to come up with a solution that satisfies both of you. Finally, follow through on the solution and make sure you're both committed to it. Taking these steps can help you resolve conflicts in a healthy and productive way.

There are many different types of relationship problems that can lead to conflict. Some examples include:
- Financial disagreements, such as differences in spending habits or how to manage money.
- Communication issues, such as a lack of open and honest communication or difficulty expressing feelings.
- Trust issues, such as mistrust, infidelity, or a lack of faith in the other person's intentions.
- Boundary issues, such as a lack of personal space or feeling too dependent on the other person.
- Power struggles, such as trying to control or dominate the other person.

What is the step in the process of conflict?
There are five steps involved in the conflict process. They are potential opposition, cognition, and personalization, intentions, behavior, and outcomes.
What are the 4 stages of conflict?
There are four main stages of conflict, namely, latent stage, perceived stage, felt stage, and manifest stage. The aftermath is sometimes added as one of the stages, although it represents the events that occur after the conflict is over.
Stages of Conflict
After the stages of a conflict, follow the conflict resolution. Below are the stages of conflict resolution, also known as the 5 steps to conflict resolution.
Potential Opposition or Incompatibility
It is the first step that starts due to various conditions that may lead to the development of the conflict. These situations may not directly lead to conflict, but some conditions are necessary to occur.
•	Communication: Conflict may trigger when there is an insufficient exchange of information or a breakdown in the communication channel. Too much or too little information may also cause this.
•	Structure: Team members' size and task specialization, reward systems in an organization or group dependence may cause conflict. These issues are even more prominent when the group is large. The higher the specialization of tasks, the greater the conflict may arise. their contribution.
Cognition and Personalization
Conflict needs identification on whether it is a perception issue. If no one knows that conflict exists, then no conflict exists. Just because there is a perception of conflict does not mean that parties have personalized this conflict. For example, if Jane is aware that she has disagreements with Sarah, but Jane does not seem to worry it might affect her relationship with Sarah, it is not personalized. the outcome.



",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 6,
                'author_id' => 5,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // 16 - Contraception
            [
                'id' => 139,
                'country_code' => 'ZW',
                'title' => "What are contraceptives and how they prevent pregnancy ",
                'description' => "Birth control pills are a kind of medicine with hormones. Birth control pills come in a pack, and you take 1 pill every day. The pill is safe, affordable, and effective if you always take your pill on time. Besides preventing pregnancy, the pill has lots of other health benefits too.
-The birth control pill works by stopping sperm from joining with an egg. When sperm joins with an egg it’s called fertilization.
-The hormones in the pill safely stop ovulation. No ovulation means there’s no egg for sperm to fertilize, so pregnancy can’t happen.
-The pill’s hormones also thicken the mucus on the cervix. This thicker cervical mucus blocks sperm so it can’t swim to an egg — kind of like a sticky security guard.
Condoms
-condoms are popular form of contraception that can be used by both males and females. They act as physical barrier, preventing sexual fluids from passing between people during sex.
- they also protect against sexually transmitted infections.
-oral  contraceptives pill is a hormonal method of contraception taken daily. It contains synthetic hormones that mimic those naturally produced by the body to prevent ovulation and make it difficult for sperm to reach an egg.
Implants
-lmplants are small, flexible rods that are inserted under the skin of the upper arm. They release hormones that prevent ovulation and thicken cervical mucus, making it difficult for the sperm to reach an egg.
Injection
-lnjection are hormonal methods that are administered by a healthy care professional every few months. They work by preventing ovulation and thickening cervical mucus.
Viginal rings
-Viginal rings are flexible rings that are inserted into the vigina and release hormones to prevent ovulation and thickening cervical mucus.
Intrauterine Device (IUD):An IUD is a smell T shaped device that is inserted into the uterus by a healthcare professional.It can be either hormonal or non hormonal and works by preventing fertilization of the egg or by creating an environment in the uterus that is not suitable for pregnancy.
Diaphragm
A diaphragm is a shallow,dome shaped cup made of silicone or latex that is inserted into the vargina before sex.It acts as a physical barrier, preventing sperm from reaching an egg

",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 3,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 140,
                'country_code' => 'ZW',
                'title' => "Types of contraceptives",
                'description' => "The Condom
The condom is the only form of contraception that protects against most STIs as well as preventing pregnancy. This method of contraception can be used on demand, is hormone free and can easily be carried with you and it comes in male and female varieties.
The Oral Contraceptive Pill
It’s the little tablet taken once a day. The oral contraceptive pill is the most commonly reported method of contraception used by Australian women. There are a few different types of pill to choose from, so it’s about finding the one that’s right for you. The combined pill contains oestrogen and progestin and mini pill contains only one hormone, a progestin. The pill can have many benefits, however remembering to take it on time is a must.
Intrauterine Device (IUD)
This small, T-shaped device is made from made of material containing progesterone hormone or plastic and copper and is fitted inside a woman’s uterus by a trained healthcare provider. It's a long-acting and reversible method of contraception, which can stay in place for three to 10 years, depending on the type.
The Contraceptive Implant
In this method, a small, flexible rod is placed under the skin in a woman’s upper arm, releasing a form of the hormone progesterone. The hormone stops the ovary releasing the egg and thickens the cervical mucus making it difficult for sperm to enter the womb. The implant requires a small procedure using local anaesthetic to fit and remove the rod and needs to be replaced after three years
The Contraceptive Injection
The injection contains a synthetic version of the hormone progestogen. It is given into a woman’s buttock or the upper arm, and over the next 12 weeks the hormone is slowly released into your bloodstream.
Emergency Contraception Pill (The ‘Morning After’ Pill)
The Emergency Contraception Pill can be used to prevent pregnancy after sex if contraception wasn’t used, a condom has broken during sex, or a woman has been sexually assaulted.

Contraceptive Ring
This method consists of a flexible plastic ring constantly releasing hormones that is placed in the vagina by the woman. It stays in place for three weeks, and then you remove it, take a week off then pop another one in. The ring releases the hormones oestrogen and progestogen. These are the same hormones used in the combined oral contraceptive pill, but at a lower dose
Diaphragm
A diaphragm is a small, soft silicon dome is placed inside the vagina to stop sperm from entering the uterus. It forms a physical barrier between the man's sperm and the woman's egg, like a condom.
Sterilisation
Sterilisation is the process of completely taking away the body’s ability to reproduce through open or minimal invasion surgery. It is a permanent method of contraception, suitable for people who are sure they never want children or do not want any more children. Sterilisation is available for both women and men and is performed in a hospital with general anaesthesia.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 3,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 141,
                'country_code' => 'ZW',
                'title' => "Preparations for labor ",
                'description' => "Preparing for labor is an important part of the pregnancy journey. Here are some tips to help you get ready:
1. Educate Yourself: Attend childbirth classes or workshops to learn about the different stages of labor, pain management techniques, relaxation exercises, and breastfeeding. Educating yourself will help you feel more confident and prepared.
2. Create a Birth Plan: Discuss your preferences for labor and delivery with your healthcare provider and write them down in a birth plan. Include your desired pain management options, positions for labor, who you want present during the birth, and any other specific wishes.
3. Pack Your Hospital Bag: Prepare a hospital bag well in advance. Include essential items such as comfortable clothes, toiletries, underwear, nursing bras, baby clothes, diapers, and any other personal items you may need during your hospital stay.
4. Discuss Pain Management Options: Talk to your healthcare provider about the various pain relief options available during labor, such as natural techniques (breathing exercises, massage, water immersion) or medical interventions (epidural anesthesia, nitrous oxide). Understand the benefits and risks of each method to make an informed decision.
5. Practice Relaxation Techniques: Practice deep breathing exercises, visualization, and relaxation techniques to help manage pain and reduce stress during labor. These techniques can help you stay calm and focused.
6. Stay Active and Fit: Engage in regular exercise throughout your pregnancy, as it can help build stamina and strength for labor. Activities like prenatal yoga, walking, and swimming can be beneficial.
7. Pack Snacks and Drinks: Pack snacks and drinks for both you and your partner to help sustain energy levels during labor. Choose light and easily digestible snacks like fruit, nuts, crackers, or energy bars.
8. Discuss the Birthing Process with Your Partner: Talk to your partner about their role during labor and discuss ways they can support and encourage you throughout the process. This may include providing physical comfort, offering emotional support, or advocating for your birth plan.
Remember, every labor and birth experience is unique. It's essential to be flexible and open to changes as circumstances may arise. Communicate with your healthcare provider, trust your instincts, and have faith in your body's ability to birth your baby.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 6,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 142,
                'country_code' => 'ZW',
                'title' => "Pregnant Tips",
                'description' => "Here are some helpful pregnancy tips:
1. Prenatal Care: Schedule regular prenatal appointments with a healthcare provider to ensure the health and well-being of both you and your baby. Prenatal care helps monitor the progress of your pregnancy and allows for any necessary interventions.
2. Eat Nutritious Foods: Focus on a well-balanced diet that includes a variety of fruits, vegetables, lean proteins, whole grains, and dairy products. Avoid foods that may pose a risk, such as raw or undercooked meats, unpasteurized dairy products, and certain types of fish high in mercury.
3. Stay Hydrated: Drink plenty of water throughout the day to maintain proper hydration. Adequate hydration is essential for both you and your baby's health.
4. Exercise Regularly: Engage in moderate exercise unless advised otherwise by your healthcare provider. Activities like walking, swimming, prenatal yoga, or low-impact aerobics can help maintain fitness levels and reduce discomfort.
5. Get Adequate Rest: Pregnancy can be physically and emotionally demanding, so make sure to prioritize rest and sleep. Sleep on your side, preferably the left side, to promote optimal blood flow and reduce the risk of certain complications.
6. Manage Stress: Find healthy ways to cope with stress, such as practicing relaxation techniques, meditation, deep breathing exercises, or engaging in activities you enjoy. Seek support from loved ones or consider joining a prenatal support group.
7. Take Prenatal Vitamins: Ensure you're taking prenatal vitamins recommended by your healthcare provider. These supplements help provide the necessary nutrients like folic acid, iron, calcium, and others that are essential for the baby's development.
8. Avoid Harmful Substances: Stay away from smoking, alcohol, illegal drugs, and exposure to harmful chemicals or toxins. They can significantly impact the health and development of your baby.
Remember, it's crucial to consult with your healthcare provider for personalized advice and guidance throughout your pregnancy journey.



",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 6,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 143,
                'country_code' => 'ZW',
                'title' => "Pregnancies",
                'description' => "Pregnancy stages
Pregnancy is a beautiful process in which a woman's body nurtures and develops a baby. It typically lasts for about 40 weeks, divided into three trimesters.
First Trimester (Weeks 1-12):
During the first trimester, a woman may experience some common symptoms such as nausea (morning sickness), fatigue, breast tenderness, frequent urination, mood swings, and food cravings or aversions. The baby's organs start to form during this period, and by the end of the first trimester, all essential organs have started to develop.

Second Trimester (Weeks 13-28):
The second trimester is often considered the most enjoyable phase of pregnancy. The initial discomforts generally subside, and many women experience increased energy levels. Physical changes like a growing belly become more noticeable, and the baby's movements, known as quickening, can be felt. By this stage, the baby's sex is usually identifiable, and ultrasound scans may be done to monitor growth and check for any abnormalities.

Third Trimester (Weeks 29-40):
In the final trimester, the baby continues to grow rapidly, and the expectant mother may experience new symptoms. These might include backaches, increased need to urinate, shortness of breath, swelling in the legs and ankles, heartburn, and difficulty sleeping. As the due date approaches, the baby's head usually moves down into the pelvis in preparation for birth, which may result in more pressure on the lower abdomen.

It's important to note that every pregnancy is unique, and symptoms may vary greatly from person to person. Regular prenatal care and communication with healthcare providers are crucial throughout the pregnancy journey to ensure the well-being of both the mother and the baby.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 6,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 144,
                'country_code' => 'ZW',
                'title' => "Pregnancy Infections",
                'description' => "During pregnancy, it is important to be aware of potential infections that can affect both the mother and the baby. Here are some common pregnancy infections and ways to prevent them:
1. Urinary Tract Infections (UTIs): UTIs are more common during pregnancy due to hormonal changes and increased pressure on the bladder. Drink plenty of water, urinate frequently, and practicing good hygiene to reduce the risk of UTIs. If you experience symptoms such as pain or burning during urination, cloudy or strong-smelling urine, or frequent urge to urinate, contact your healthcare provider.
2. Yeast Infections: Hormonal changes during pregnancy can lead to an overgrowth of yeast in the vaginal area. Wear breathable cotton underwear, avoid douching, use unscented soaps, and maintain good hygiene to prevent yeast infections. If you experience itching, redness, or abnormal discharge, consult with your healthcare provider for appropriate treatment options.
3. Bacterial Vaginosis (BV): BV is a common vaginal infection caused by an imbalance of bacteria. Maintaining good feminine hygiene practices, including avoiding douching and using mild, unscented soaps, may help prevent BV. If you notice a change in vaginal discharge, particularly if it has a fishy odor, consult your healthcare provider for diagnosis and treatment.
4. Group B Streptococcus (GBS): GBS is a bacteria that is commonly found in the vagina or rectum. It is tested between weeks 35 and 37 of pregnancy. If positive, antibiotics are administered during labor to prevent transmission to the baby. Regular prenatal care and testing are essential for early detection and treatment of GBS.
5. Sexually Transmitted Infections (STIs): STIs like chlamydia, gonorrhea, syphilis, herpes, and HIV can be harmful to both the mother and the baby during pregnancy. It is crucial to have regular prenatal check-ups and undergo STI screenings to ensure early diagnosis and appropriate treatment.
It's essential to communicate openly with your healthcare provider about any symptoms or concerns you may have during pregnancy. They can provide guidance, perform necessary tests, and prescribe appropriate treatment if needed. Taking proper precautions and seeking timely medical care can help ensure a healthy pregnancy for both you and your baby.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 6,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 145,
                'country_code' => 'ZW',
                'title' => "Pregnancy signs and symptoms",
                'description' => "Certainly! Here are some common signs and symptoms of pregnancy:
1. Missed Period: A missed period is often the first indication that a woman may be pregnant. However, it's essential to note that other factors can also cause a missed period.
2. Breast Changes: Many women experience breast tenderness, swelling, or sensitivity as an early sign of pregnancy. Breasts may begin to feel tender , swollen and generally heavy or full. Nipples may also become larger and more sensitive and the areolae may darken.
3. Nausea and Morning Sickness: Nausea, with or without vomiting, is often referred to as morning sickness. It's a common symptom that can occur at any time of the day or night.
4. Fatigue: Feeling unusually tired or experiencing excessive fatigue is a prevalent symptom of early pregnancy. Hormonal changes and increased blood production are responsible for this fatigue.
5. Frequent Urination: Pregnancy hormones can increase blood flow to the kidneys, leading to increased urination. This symptom often appears in the early stages and continues throughout the pregnancy.
6. Food Cravings and Aversions: Many pregnant women develop cravings for specific foods, while others experience aversions to certain smells or tastes.
7. Mood Swings: Hormonal changes during pregnancy can lead to mood swings and emotional ups and downs.
8. Changes in the Body: Some women may notice physical changes like bloating, mild abdominal cramping, or a slight increase in basal body temperature.
9. Spotting:Some women may experience light bleeding and spotting in early pregnancy.The bleeding is most often the result of implantation. Implantation usually occurs one to two weeks after fertilization.Early pregnancy bleeding can also result from relatively minor conditions such as an infection or irritation.Bleeding can also sometimes be a signal of a serious pregnancy complication such as miscarriages, ectopic pregnancy or placenta previa.
10. Back pain : Hormones and stress on the muscles are the biggest causes of back pain in early pregnancy.Later on ,increase in weight and shifted center of gravity may cause back pains. Around half of all pregnant women report back pain during their pregnancy.
While pregnancy is usually a happy time,it can also be a source of stress.A new baby means big changes to your body,your personal relationships and even your finances.Dont hesitate to ask your doctor for help if you begin to feel overwhelmed.
It's important to remember that these signs and symptoms can vary greatly from person to person. If you suspect you may be pregnant, taking a home pregnancy test or consulting with a healthcare provider is the best way to confirm it.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 6,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // 18 - Gender Norms and Gender roles
            [
                'id' => 152,
                'country_code' => 'ZW',
                'title' => "Understanding gender roles in the workplace",
                'description' => "Gender roles play a large factor in the office workspaces.When females are compared to the males in the office, they take a much more subservient role and let the male employees have the authority and power in the office. The classic gender roles that have been embedded into society have clearly permeated and held true in the workplace between genders in terms of assigning roles of leadership and authority.
Importance of challenging gender roles in workspaces

Challenging gender roles is essential for creating equitable workplaces where everyone can feel safe and valued for who they are regardless of their gender identity
People who identify outside of the traditional binary of male/female may experience discrimination from those who adhere strictly to traditional gender roles because their identities don’t fit neatly into either category .By challenging these roles we can create a more inclusive workplace culture where everyone is respected regardless of their gender identity or expression.
Additionally, when we challenge gender roles we may also be able to break down some of the stereotypes associated with genders such as the idea that women are not capable leaders or that men must always take charge in relationships or situations.

How to combat gender roles in workspaces
To start, employers need to become aware of how these norms manifest themselves within their own organizations by conducting surveys and interviews with employees from diverse backgrounds and experiences.
Once they have identified any disparities between genders or other aspects of identity such as race or age , they must create actionable plans to make sure everyone is treated fairly regardless of who they are or what they look like
Additionally, employers must support employees through anti-bias training initiatives and D&I education around topics such as unconscious bias, microaggressions, intersectionality, and more, so that everyone feels comfortable speaking out if they experience discrimination at work
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 146,
                'country_code' => 'ZW',
                'title' => "Types of gender roles ",
                'description' => "Traditional Gender Roles
Traditional gender roles expect women to be polite, nurturing, wear clothes that do not expose their skin and caring for the house. Women are to listen to their husbands and, in most cases, not work so they can take care of their children. In the traditional gender role, women are to be hyper-feminine.For men, traditional gender roles expect them to be aggressive, the sole caretaker of the family, and not show emotions. Traditionally ,men have the write to discipline their wives for unacceptable behavior and harrass women for provocative dressing.
Egalitarian Gender Roles
The theory of egalitarian gender roles is based on the concept of an egalitarian society.An egalitarian society believes that everyone is equal, should be treated the same, and have access to all equal opportunities regardless of gender, age and race. Here, women and men in relationships would work, take care of the house, and raise their children.For some feminists, egalitarian gender roles are their end goal where people are treated the same and have equal opportunities among various sections of societies  regardless of gender. Some women are against egalitarian societies as they lack social stratification.
Transitional Gender Roles
The final type of gender role is the transitional gender role. Transitional roles and norms are stepping stones between traditional and egalitarian roles.In transitional gender roles the man is still the primary source of income. Women have more freedom outside the traditional position to pursue a career outside of homemaking and have access to high income jobs.While countless women have careers, companies, and children, this is the type of gender role that society is most in line with. Typically, the man is still the breadwinner while the woman can work until she has to sacrifice part of her career for children.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 147,
                'country_code' => 'ZW',
                'title' => "Types of gender norms",
                'description' => "Gender norms are social principles that govern the behavior of girls, boys, women, and men in society and restrict their gender identity into what is considered to be appropriate.
Types
1. Folkways
 Folkways are customs that people follow within a society. They are often learned implicitly, meaning that they may not have been taught about the folkways in your culture but learned them by being embedded in a culture while growing up.

Examples: These are small little customs like covering your mouth when you yawn, trying not to smoke downwind of others , table manners ,language phrases ,greetings ,goodbyes and  making sure you say thank you to the grocery store clerk.
 If you break a folkway, you might be considered a little strange, but no one will be too upset. You just might not make friends! People who understand folkways are usually more liked and socially accepted.
2. Mores
Mores are moral norms. The term ‘more’ comes from ‘morality’. If you break a more, society will consider you to be immoral. Some mores are illegal  while others are not.

Examples: Talking behind a friend’s back , lying , trespassing and bullying.  These could be considered immoral and, therefore, a more that has been contravened. It’s not illegal to gossip, but people will frown upon you and consider you to have broken moral standards.
Breaking a more will likely get you shunned by your community and friendship groups, but unlike taboos, they’re also things that are openly discussed, which makes it easier to know and understand them.
3. Taboos
Taboos are social norms in a society that are considered shocking if you break them. They’re often things that no one talks about because they’re so embarrassing and socially unacceptable.

Examples: Taboos in African culture include adultery, flirting while married, and spitting at others, eating your totem animal and cannibalism.
While taboos may not necessarily be written into law , they are considered to be very severe. If you break one, you may be so embarrassed that you might not be able to look people in the eye anymore.

4. Laws
Definition: Laws are cultural and social norms that are policed by the state. If you’re found to have broken the law, you could be fined or even go to jail.

Examples: Commonly, a society will pass laws related to violence against others, theft, and damage to property.
This is the highest level of severity of all four types of norms. If you break a law, you may find yourself in a lot of trouble.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 148,
                'country_code' => 'ZW',
                'title' => "Sources of gender norms and gender roles",
                'description' => "Family
Family is the first agent of socialization and enculturation. There is considerable evidence that parents socialize sons and daughters differently. .  For example, parents talk about numbers and counting twice as often with sons than daughters and talk to sons in more detail about science than with daughters. Parents are also much more likely to discuss emotions with their daughters than their sons.

Girls may be asked to fold laundry, cook meals or perform duties that require neatness and care. It has been found that fathers are firmer in their expectations for gender conformity than are mothers, and their expectations are stronger for sons than they are for daughters .This is true in many types of activities, including preference of toys, play styles, discipline, chores, and personal achievements. As a result, boys tend to be particularly attuned to their father’s disapproval when engaging in an activity that might be considered feminine, like dancing or singing.

Peers
Peer socializations can also serve to reinforce gender norms of a culture. Children learn at a very young age that there are different expectations for boys and girls. When children do not conform to the appropriate gender role, they may experience negative consequences like criticism, bullying or rejection by their peers at school and home. Boys and young men are more likely to experience intense, negative peer responses when they do not follow traditional gender norms.

Education
 Studies suggest that gender socialization still occurs in schools today, perhaps in less obvious forms . Teachers may not even realize that they are acting in ways that reproduce gender-differentiated behavior patterns but any time students are asked to arrange their seats or line up according to gender, teachers are reinforcing that boys and girls should be treated differently . Even in levels as low as kindergarten, schools subtly convey messages to girls indicating that they are less intelligent or less important than boys. Research has it that teachers praise male students far more than they praised female students and , teachers interrupted girls more and provided boys with more opportunities to expand on their ideas.
Media
In television and movies, women tend to have less significant roles and are often portrayed as wives or mothers. When women are given a lead role, they are often one of two extremes: a wholesome, saint-like figure or a malevolent, hypersexual figure (Etaugh and Bridges, 2003). Weisbuch and Ambady (2009) demonstrated that nonverbal behavior on television can communicate culturally shared attitudes and biases about women and ideal body images. Television commercials and other forms of advertising also reinforce inequality and gender-based stereotypes. Women are almost exclusively present in ads promoting cooking, cleaning, or child care-related products (Davis, 1993). In general, women are underrepresented in roles that involve leadership, intelligence, or emotional stability. In mainstream advertising, however, themes intermingling violence and sexuality are quite common (Kilbourne, 2000).
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 149,
                'country_code' => 'ZW',
                'title' => "How gender norms and gender roles harm the society",
                'description' => "Girls around the world are kept from attending school in favor of gender roles related to their role in household chores and the position of girls in society. Their voices are undervalued if heard at all. Their childhoods are stolen, and the countries where they live are robbed of their talent and potential.Without equal opportunities to learn, income inequality and dependence on men to provide keeps girls in a cycle of poverty and confinement to their homes to perform unpaid domestic labor. Lack of outside opportunities limits the ability of girls to reach their ambitions.
Girls and boys can also be assigned very different tasks even when working in the same environment, which exposes them to unique risks and hazards. On a family farm, for example, boys often bear greater responsibility for operating machinery, using sharp tools, and spraying chemicals. Girls, on the other hand, more often play a role in hauling water and carrying wood.

\"Double work duty,\" meaning both working a job and fulfilling household chores, befalls girls more commonly than boys as well, leaving little to no time to attend school. Parents are often influenced by gender norms about girls’ roles in society and decide to keep girls home from school in favor of care and domestic work. Boys, on the other hand, are encouraged to attend and complete school in order to provide for their families.

School-related Gender Based Violence is a significant issue that is caused due to gender norms and unequal power hierarchies. It may occur on the way to school or at school, and may be perpetrated by peers, teachers or other school staff. Bullying is the most common form of violence in schools, affecting 1 in 3 students aged 13-15. Girls and boys also experience GBV at school which is masked as \"discipline\" Children and adolescents may not report GBV at school for a range of reasons, including norms that position teachers in positions of authority.

Attacks on girls’ schools are often a direct attack on girls who step outside of restrictive gender roles and expectations. In some cases, violent extremist groups have clearly stated their rationale for attacking girls’ schools – for example, to warn girls not to go to school, demand that teachers and parents close girls’ schools, or to try to restrict mobility and dress codes for women teachers and girls attending schools.

While girls are significantly more vulnerable to sexual violence due to gender roles, the stigma of sexual violence against boys and the lack of services to respond to the needs of male survivors makes it even less likely that such incidents will be reported. For example, traditional gender norms around masculinity will likely affect whether boys access mental health services, as well as how boys are treated by service providers when they do report sexual violence.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 150,
                'country_code' => 'ZW',
                'title' => "Gender roles and gender norms in intimate relationships",
                'description' => "In romantic relationships, gender roles often play a significant role in shaping the dynamics between partners. These roles, however, are not predetermined, and they have changed throughout history. To fully grasp the complexities of gender roles in relationships, it is necessary to explore where they come from, how they have evolved, and the impact of culture and society on them.

The Origins of Gender Roles in Relationships
The origins of gender roles can be traced back to ancient times when men were hunters, and women were gatherers. Men were expected to be the providers, while women were responsible for taking care of the home and children. These roles were reinforced through religion, culture, and tradition. As societies evolved and became more complex, gender roles also began to shift. Women started to enter the workforce and gain more independence, challenging traditional gender norms. Thus gender roles have evolved, and men and women have started sharing responsibilities.
The Impact of Culture and Society on Gender Roles in Relationships
Traditional gender roles have both advantages and disadvantages. The main advantage is that they provide a framework for how partners should behave, reducing confusion and conflict. However, they can also be limiting and restrictive, preventing partners from exploring their full potential.For example, the expectation that women should be responsible for all domestic duties can lead to unequal distribution of labor and limit women’s opportunities for career advancement. Additionally, the pressure for men to be the sole breadwinners can lead to financial stress and limit their ability to pursue other interests or roles within the family.
Society and cultural gender roles and norms in relationships have left women more vulnerable and prone to all forms of abuse. Traditionally ,women are not allowed to communicate their needs,wants and expectations from men as they would be portrayed as morally lose in that they are challenging patriarchy. As a result women would get reject by the men,family and society at Large. Due to such stereotypes women became fearful and submissive to their partners even if they were being abused . Men were also victimised in that they were not allowed to seek advises from their partners because they would have been considered to be weak and failing manhood ,so they ended up making terrible choices.

 Challenging Traditional Gender Roles in Relationships
One way to challenge traditional gender roles in relationships is by sharing household responsibilities equally. This means that both partners should take on tasks such as cooking, cleaning, and childcare, instead of assuming that these responsibilities fall solely on one person based on their gender.

Another important aspect of breaking down stereotypes in relationships is communication and respect. It is important to have open and honest conversations about each partner’s expectations and needs, and to work together to find solutions that work for both parties. This can involve challenging assumptions about gender roles and discussing how to create a more balanced and equitable relationship.",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 151,
                'country_code' => 'ZW',
                'title' => "Sexual and reproductive health and gender norms",
                'description' => "The role of gender norms in sexual and reproductive health has long been recognised in research. There has been a focus on adolescent girls and young women who bear the brunt of inadequate policy and programming, particularly where persistent gender inequality denies them the right to understand and control their bodies and their life choices.

Norms about feminine behaviours

Studies confirm that the sexual activity of girls is particularly condemned where they are expected to refrain from sexual activity until marriage. Girls who have premarital sex may encounter judgemental attitudes or mistreatment from health providers and face social stigma for being immoral and dishonouring their families. Those who appear to know too much or act in a sexual way can ruin their own reputation, be labelled as ‘bad girls’, and face harassment.
Married girls are often expected to start childbearing and have limited control over family planning.  Communication with a partner is important: young women who cannot communicate with their husbands are less likely to use contraception or more likely to conceal its use.
Obedience and submission to male authority are two typical features of traditional femininity. Studies have shown that in settings characterised by unequal gender relations, girls have limited ability to negotiate condom use as they may be seen as unfaithful or promiscuous, or face partner violence and sexual coercion that increase their vulnerability to unwanted pregnancies, STIs and HIV.


Norms about masculine behaviours

Adolescent boys are also affected by rigid gender norms and masculine ideals. The pressure to take sexual risks, have many heterosexual partners, engage in sexual intercourse as proof of manhood and avoid health care, all leave boys vulnerable to sexual risks and infections, and contribute to poor sexual and reproductive health outcomes.

According to such ideals, sexual intercourse is an affirmation of masculine power that rejects intimacy and emotional bonding as feminine qualities. Boys are often socialised to the idea that their sexual drive is uncontrollable and must be satisfied through the conquest and submission of girls, legitimising forced sexual intercourse. The pressure to take risks also prompts men to reject safe sex, including condom use.
Boys often feel pressured to live up to peer expectations and display virility to avoid ridicule, including homophobic taunts. Meanwhile, boys who do not align themselves with aggressive heterosexual norms face greater sanctions than girls with alternative sexual identities.

Adolescent boys think they should appear to know everything and be reluctant to seek information or help, even though they may lack any knowledge about sexual health. Gender norms may also deter them from seeking medical assistance such as STI testing and treatment, with greater adherence to gender-inequitable norms linked to lower levels of HIV testing.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 153,
                'country_code' => 'ZW',
                'title' => "Gender Balance myth that most men still believe",
                'description' => "Gender Balance Myth #1: Motherhood
“Women make personal choices. That explains why there aren’t many in leadership.”
Like most myths, this one is partially true. Women more than men—until now—prioritize family duties over career progression. But things are changing fast, with younger generations of men more interested in balancing family and work than any prior generation.  Men believe that women are birth giving machines and they should stay home taking care of the family.
Gender Balance Myth #2: Meritocracy

Men believe talent will automatically rise to the top  while women believe if they do a good job they’ll be promoted. Women rarely want to do the sort of networking, politics, and self-promotion that are still often seen as a sign of the ambition needed for many senior jobs, especially not if the senior ranks are heavily male-dominated. Because women believe hard work and good results will be recognized and they’re doubly shocked and disappointed to discover the smooth talker next door gets promoted, convinced they’re better performers.Women then conclude the system is discriminatory and biased against them. Men conclude that women don’t “want” the jobs.
Gender Balance Myth #3: Minimization

Men are rightly confused by the bundling of gender balance into a rainbow of diversity dimensions. Women are the majority of university graduates globally. They’re the majority of consumers, decision-makers, and clients in an ever-expanding range of sectors.It leads most men to think all diversity dimensions are on a par, and there’s no need to prioritize or focus on gender.
Gender Balance Myth #4: Masculinity
Most men and women think leaders have masculine traits because that’s what works. Actually, most people think leaders have masculine traits because that’s most of what we’ve known.The stereotypes about leaders are as strong as those about genders and skew heavily male.The different skills and styles that women bring to the workplace often aren’t seen as gender differences. Instead, they’re usually judged as an unacceptable lack of desired masculine traits: self-confidence, hunger, 24/7 work prioritization, and personal-professional compartmentalization. The differences they bring challenge the models, the culture, and the “way things have always been done.”
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 4,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // 19 - HIV & other STIs
            [
                'id' => 154,
                'country_code' => 'ZW',
                'title' => "It's No-Longer Kills HIV and STIs",
                'description' => "Certainly! It is important to note that while there have been significant advancements in managing and preventing HIV and STIs, there is currently no known cure for these infections. HIV, in particular, remains a chronic condition that requires ongoing medical management.
While antiretroviral therapy (ART) has revolutionized the treatment of HIV, allowing individuals to live longer and healthier lives, it does not completely eliminate the virus from the body. ART helps to suppress the virus, prevent its replication, and boost the immune system. Consequently, it reduces the risk of transmitting the virus to others and significantly lowers the progression of HIV to AIDS.
Similarly, when it comes to STIs, treatment primarily focuses on managing the infection, alleviating symptoms, and preventing further transmission. Antibiotics are commonly used to treat bacterial STIs like chlamydia, gonorrhea, and syphilis. However, it is important to note that the emergence of antibiotic resistance poses challenges in treating some strains of these infections.
Prevention remains critical in reducing the spread of HIV and STIs. Education, safe sex practices, regular testing, and early detection are key strategies for minimizing the risk of transmission. Condoms continue to be effective in preventing the transmission of many STIs, though they are not 100% foolproof.
Prevention remains critical in reducing the spread of HIV and STIs. Education, safe sex practices, regular testing, and early detection are key strategies for minimizing the risk of transmission. Condoms continue to be effective in preventing the transmission of many STIs, though they are not 100% foolproof. The later stage of HIV infection known as acquired immunodeficiency syndrome (AIDS) is characterized by a severely compromised immune system that makes the person vulnerable to numerous opportunistic infections and illness.

Healthcare experts should be consulted for individualized guidance on HIV and STI prevention, testing, and treatment. They possess the most recent medical information and are able to offer advice based on a person's unique situation and medical background.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 7,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 155,
                'country_code' => 'ZW',
                'title' => "STIs and HIV MEANING ",
                'description' => "HIV and STIs it may result in suffering, discomfort, infertility, and even demise. Since we frequently lack the knowledge, skills, and resources necessary to protect ourselves and their partners. This article will go over some of the information, dangers, and preventative methods for HIV and STIs among young people.
HIV and STIs: What are they?
Human immunodeficiency virus is known by the acronym HIV. As a result of the virus's assault on the immune system, the body has a tougher time warding off infections and illnesses. HIV can cause AIDS (acquired immunodeficiency syndrome), a disorder in which the immune system becomes so compromised that it is unable to shield the body from malignancies and other opportunistic infections, if left untreated, AIDS can be fatal.
STIs, or sexually transmitted infections, are a common problem. Sexual contact is the primary method of transmission for many illnesses. Chlamydia, gonorrhea, syphilis, herpes, the human papillomavirus (HPV), and hepatitis B are a few of the most prevalent STIs. In addition to these methods, some STIs can be spread via blood transfusions or sharing needles.
HIV and AIDS prevalence
 Knowing your status, whether you are HIV positive or HIV negative, it will help you make better decisions about your health, your future, and how you can contribute to the health of others around you. This is the best reason to be tested.
Treatment should be started as soon as possible if you test positive for HIV or another STI. Your chances of developing complications or spreading the infection to others can be decreased, your symptoms can be eased, and you can maintain your health with the aid of treatment. Antibiotics are effective in treating some STIs, whereas medicine is also effective in treating other STIs. Antiretroviral therapy (ART) can suppress the virus and enhance your quality of life while treating HIV, which cannot be cured.
Due to their ability to physically stop the exchange of bodily fluids, condoms are among the most effective means of preventing HIV and STIs. Every time you engage in vaginal, anal, or oral intercourse, use a condom, and make sure you do so appropriately and often. At many medical offices, pharmacies, and non-government organization, you may obtain condoms sometimes free and at cheap cost.
Interacting with your significant other, parents, or other caretakers. For a sexual relationship to be successful and secure, communication is essential. Discussing your sexual wants, preferences, boundaries, and expectations with your partner should be possible prevent STIs and HIV. Try to discuss your sexual health with your parents or other primary caregivers as well, as they might be able to offer you support and useful information.
Where can young people get more information and help?
I.	Your health care provider
II.	Your school nurse or counselor
III.	A local clinic or health center.

In a nutshell numerous hotlines like 393 and websites provide private, anonymous information and help for HIV and AIDS.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 7,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 156,
                'country_code' => 'ZW',
                'title' => "Preventing HIV and STIs using PREP AND PEP",
                'description' => "Pre-exposure prophylaxis (PrEP) and post-exposure prophylaxis (PEP) are two preventive measures used to combat the spread of HIV. PrEP is a medication taken by individuals who are at high risk of contracting HIV to reduce the chances of infection. It has been shown to be highly effective, reducing the risk of HIV transmission by nearly 99% when taken correctly. PEP, on the other hand, is a treatment taken after potential exposure to HIV, such as in cases of unprotected sex or needle sharing. It is intended to be used as an emergency measure and should be initiated within 72 hours of exposure.
\"Prep and Pep\" refers to two different strategies aimed at preventing the transmission of HIV and sexually transmitted infections (STIs). Both strategies have shown promising results in reducing the prevalence of these diseases.
While PrEP and PEP are effective in reducing the risk of HIV transmission, it is important to note that they do not provide protection against other sexually transmitted infections (STIs). Condom usage is still recommended for the highest level of protection against STIs.
    It is important to note that there have been concerns raised about PrEP's potential role in the rise of STIs. However, it is not apparent if PrEP usage by those who are already at a higher risk of developing STIs causes an increase in STI rates or whether this is the case. Individuals utilizing PrEP or PEP must regularly test for STIs and, as needed, seek the proper medical attention.
Antiretroviral drugs are used as part of Pre-Exposure Prophylaxis (PrEP) by those who are very likely to be exposed to HIV. If used consistently and according to the directions, this drug, which is often taken as a daily pill, can significantly lower the risk of developing HIV. Men who have sex with men (MSM), transgender people, and heterosexual couples with one HIV-positive partner are among the categories in which PrEP has shown to be quite successful.
STI and HIV transmission can be slowed down with the use of post-exposure prophylaxis (PEP), another prophylactic measure. PEP comprises the administration of antiretroviral medications within a set time period (often within 72 hours) after a suspected HIV exposure, such as through unprotected sexual contact or needle sharing. To prevent the virus from entering the body and spreading, PEP is used as an immediate measure.
Due of their potential to prevent the spread of STIs and HIV, these tactics have attracted considerable attention from and acknowledgement from the medical community. PrEP and PEP can play a significant role in lowering the prevalence of these diseases when used in conjunction with other preventative interventions, such as condom use and routine testing.
It\'s important to note that while PrEP and PEP are effective in preventing HIV transmission, they do not provide protection against other STIs. Therefore, it is crucial for individuals engaging in sexual activities to also practice safe sex by using barrier methods, such as condoms, and getting regular screenings for STIs.
                                                                                                                                                                                                                                                                                                                                                                                                          ",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 7,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 157,
                'country_code' => 'ZW',
                'title' => "Importance of screening early for HIV and STIs",
                'description' => "The need of early detection and screening for STIs and the human immunodeficiency virus cannot be overstated. The significance of screening and early detection is highlighted by the following main points:
1. Preventing Transmission: HIV and STIs can be transmitted through sexual contact, sharing needles, or from mother to child during pregnancy, childbirth, or breastfeeding. By undergoing regular screening, individuals can be aware of their infection status and take necessary precautions to prevent transmission to their partners or newborns.
2. Protecting Individual Health: Prompt and appropriate medical interventions can be provided to patients who have early detection of HIV and STIs. Early diagnosis and treatment can stop infections from spreading, control associated symptoms, and lower the chance of long-term repercussions like infertility, persistent pain, or significant health problems
3. Sexual Partners Are Safer: Through testing, people can let their partners know whether they are infected and what has to be done to stop the spread of the infection. This aids in preventing the spread of infection and encourages responsible sexual behavior.
4. Timely Diagnosis: Early screening makes it possible to find and diagnose STIs and HIV early on. Healthcare professionals can quickly begin the necessary therapy when these illnesses are discovered early, reducing the risk of complications and additional transmission.
5. Impact on Public Health: Widespread screening and early detection contribute to public health efforts in controlling the spread of HIV and STIs. Through surveillance programs, healthcare authorities can track the prevalence of these infections, allocate resources efficiently, and implement targeted prevention and intervention strategies.
6. Education and Awareness: Through screening initiatives, people can gain access to the essential counseling, information, and awareness on STIs, HIV, and safe sexual practices. As a result, they are better equipped to make wise decisions, take preventative actions, and adopt healthier habits.
7. Busting Myths and Stigma: Consistent testing helps bust stereotypes, beliefs, and stigma related to STIs and HIV. It encourages honest communication, lessens prejudice and fear, and creates an environment where those who have these infections can feel supported.
In conclusion, early detection of STIs and HIV is essential for preventing transmission and promoting public health. They make it possible for prompt diagnosis, suitable treatment, and efficient preventative methods, thereby minimizing the effects of these infections on both people and society. Individuals are advised to get routine examinations based on their risk factors, sexual behavior, and medical provider advice.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 7,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 158,
                'country_code' => 'ZW',
                'title' => "MYTHS AND FACTS ON HIV AND STIs",
                'description' => "Understanding HIV and STIs (sexually transmitted illnesses) is crucial for promoting safe sexual behavior and halting the spread of these diseases. The myths and realities around STIs and HIV must be addressed in order to disseminate correct information. It is important to separate myths from facts to better understand how to prevent and manage these conditions.
Here are some common myths and facts about HIV and STIs:
Myth 1: You can’t get an STI from oral sex.
Fact: Many STIs like gonorrhea, chlamydia, syphilis, herpes, and HPV can be spread through oral sex.
Myth 2: Having good personal hygiene can prevent the transmission of HIV and STIs.
Fact: While maintaining good personal hygiene is important, HIV and STIs are primarily transmitted through various sexual activities, including vaginal, anal, and oral sex. Practicing safe sex, such as using condoms correctly and consistently, is crucial for preventing the spread of these infections.
Myth 3: HIV is a death sentence, and there is no treatment available.
Fact: Thanks to advancements in medical science, HIV is no longer a guaranteed fatal condition. Antiretroviral therapy (ART) has greatly improved the quality of life for people living with HIV, enabling them to lead long and healthy lives. Furthermore, early diagnosis and access to treatment significantly lower the transmission risk.
Myth 4: You can tell if someone has an STI just by looking at them.
Fact: Many STIs do not have visible symptoms, particularly in the early stages. This is why regular STI testing is essential, especially for individuals who are sexually active or have multiple partners. Getting tested enables early detection and treatment, reducing the risk of further complications and transmission.
Myth 5: Only penetrative sexual intercourse can lead to HIV and STI transmission.
Factual statement: Sexual acts such as oral sex, anal sex, and genital-to-genital contact can all result in the transmission of STIs and HIV. Regardless of the particular sexual activity, it is critical to utilize barrier techniques like condoms and dental dams to lower the chance of transmission.
 Myth 6: Once you have a STI, you will always have it.
Fact is that while some STIs, like herpes and HIV, currently have no cure, many STIs are treatable and even curable with the right medications. To properly cure or control the infection, it is imperative to visit a doctor, be tested, and adhere to the prescribed course of action.
Myth 7: If you use a condom, you can't contract a STI
Fact: Although they may not offer full protection, condoms help lower the chance of contracting a STI. Herpes and HPV are two STIs that can spread through skin-to-skin contact.
Myth 8: HIV can be transmitted through casual contact like hugging or shaking hands.
 Fact: HIV is not transmitted through casual contact. It is spread through blood, semen, vaginal fluids, and breast milk 1.
Myth 9: You can tell if someone has an STI by looking at them. Fact: Many people with STIs do not show any symptoms. The only way to know for sure if you have an STI is to get tested 2.
Myth 10: You can’t get HIV if you’re taking PrEP (pre-exposure prophylaxis). Fact: PrEP is highly effective at preventing HIV, but it is not 100% effective. It is still important to use condoms and get tested regularly for HIV and other STIs
Finally, keep in mind that safe sexual behavior, routine testing, and receiving appropriate medical care are all crucial to preventing and treating these illnesses.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 7,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 159,
                'country_code' => 'ZW',
                'title' => "How can I prevent HIV and other STIs?",
                'description' => "Avoiding HIV and other sexually transmitted contaminations (STIs) requires a combination of instruction, mindfulness, and taking vital safety measures. Here are a few successful techniques to assist anticipate HIV and other STIs:
	Regardless matter the kind of sex you have, always use a new condom appropriately and regularly. HIV and other STIs that spread by bodily fluids, such as gonorrhea, chlamydia, syphilis, and trichomoniasis, can be avoided by using condoms.
	Especially if you have several sex partners or engage in high-risk behaviors, get routine HIV and other STI testing. Testing can assist in early infection diagnosis and stop the virus from spreading to others.
	Prefer oral or mutual masturbation to vaginal or anal intercourse by choosing less dangerous sexual behaviors.
	Pre-exposure prophylaxis (PrEP), a daily medication that, if taken properly, might fend off HIV infection, may be appropriate if you are at a high risk of contracting the disease. PrEP can be obtained in several nations with a doctor's prescription. If you think you have been exposed to HIV within the last 72 hours, seek medical attention immediately and ask for post-exposure prophylaxis (PEP), a 4-week course of antiretroviral drugs that can prevent HIV infection if taken as soon as possible after exposure. PEP is not 100% effective and should not be used as a regular prevention method.
	If you're a man who engages in vaginal sex with women, you might want to think about obtaining voluntary medical male circumcision (VMMC), a treatment that removes the foreskin from the penis and lowers the risk of contracting HIV through such contact by roughly 60%. Other STIs including genital herpes and the human papillomavirus (HPV) are also protected from by VMMC. The danger of HIV and other STIs is still present, despite VMMC, thus you should continue use condoms and other STI preventive measures when having sex.
	If you have HIV, take ART as directed by your doctor every day to get your viral load down to undetectable levels in your blood and body fluids. Effectively, there is no risk of HIV transmission through sex when the viral level is undetectable. But if you want to safeguard yourself and sexual partners from other STIs, you still need to use condoms and other preventative measures.
Stay safe and healthy!
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 7,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 160,
                'country_code' => 'ZW',
                'title' => "TREATEMENT AND CARE FOR HIV AND STIs",
                'description' => "The treatment options for HIV and STIs depend on the type and stage of the infection, as well as the person's overall health and preferences. There is no cure for HIV, but there are many medications that can control the virus and prevent complications. These medications are called antiretroviral therapy (ART) and they work by reducing the amount of HIV in the blood (viral load) to very low or undetectable levels. This helps to protect the immune system and reduce the risk of transmitting HIV to others. People with HIV need to take ART every day for the rest of their lives.
The treatment choices for STIs shift depending on the particular contamination. A few STIs can be cured with anti-microbial, such as chlamydia, gonorrhea, syphilis, and trichomoniasis. Other STIs cannot be cured, but can be overseen with solutions, such as herpes, hepatitis B, and human papillomavirus (HPV). A few STIs may not cause any indications, but can still lead to genuine wellbeing issues on the off chance that cleared out untreated, such as fruitlessness, pelvic fiery infection, cancer, and expanded chance of HIV. In this manner, it is imperative to urge tried routinely for STIs and look for treatment as soon as conceivable on the off chance that you have got a contamination.
If you have HIV and/or an STI, you should also talk to your health care provider about ways to protect yourself and your partner(s) from getting reinfected or spreading the infection to others. This may include using condoms, taking pre-exposure prophylaxis (PrEP) or post-exposure prophylaxis (PEP) for HIV prevention, getting vaccinated for hepatitis B and HPV, and informing your partner(s) about your status and encouraging them to get tested and treated as well.
For all STIs, it is critical to urge tested routinely, particularly in case you've got numerous sex accomplices or lock in in high-risk behaviors. Testing can offer assistance analyze the disease early and prevent its spread to others.
For key populaces, such as men who have sex with men, individuals who infuse drugs, sex laborers, transgender individuals and detainees, there are particular proposals for HIV, viral hepatitis and STI avoidance, conclusion, treatment and care4. These incorporate pre-exposure prophylaxis (PrEP) for HIV, post-exposure prophylaxis (Get up and go) for HIV and STIs, hurt decrease administrations for drug users, and comprehensive sexual wellbeing services.
I trust this data is supportive. In the event that you have got any questions or concerns almost your wellbeing, it would be ideal if you counsel a therapeutic proficient. Remain secure and sound!
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 7,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 161,
                'country_code' => 'ZW',
                'title' => "Signs and symptoms of HIV and STIs",
                'description' => "Here is where you find some information about the signs and symptoms of HIV and STIs. Here are some of the common signs and symptoms of HIV and STIs, according to different sources:
 HIV is a virus that attacks the immune system and can cause different symptoms depending on the stage of the infection. Some of the possible symptoms of HIV are fever, chills, rash, night sweats, muscle aches, sore throat, fatigue, swollen lymph nodes, and mouth ulcers within 2-4 weeks of exposure during the acute phase of infection.
Swollen lymph nodes, diarrhea, weight loss, fever, and cough, shortness of breath in the chronic stage of infection, as the virus continues to multiply and destroy immune cells.
Astute diseases, cancers, neurological issues (within the progressed organize of disease, moreover known as Helps, when the resistant framework is seriously harmed STIs are infections that are transmitted through sexual contact with an infected person. There are many types of STIs, and they can cause different symptoms. Some of the common symptoms of STIs are:
1.	Abnormal vaginal odor
2.	Blisters or bruises in or around the mouth
3.	Anal tingling, soreness, or dying
4.	Unusual release from the penis or vagina
5.	Sores or warts on the genital range
6.	Painful or visit urination
7.	Itching and redness within the genital range
8.	Abdominal torment
Not everybody who has HIV or an STI will have indications. The as it were way to know for beyond any doubt on the off chance that you've got HIV or an STI is to induce tried. You'll be able utilize the HIV Administrations Locator to discover an HIV testing location close you. You'll be able moreover conversation to your specialist or a wellbeing care supplier approximately getting tried for HIV and other STIs.I hope this information is helpful to you.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 7,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 162,
                'country_code' => 'ZW',
                'title' => "How common are HIV/STIS in Adolescents and Young people?",
                'description' => "
Teenage years are a time of sexual exploration and risk-taking, as well as vulnerability. In spite of having systemic STI symptoms like arthritis, hepatitis, or rashes, young people may visit general practitioners without necessarily disclosing their sexual behavior. Direct questions regarding sexual risks and, if necessary, STI and pregnancy testing should be conducted by doctors. As fundamental medical skills, collecting a patient's sexual history and getting their consent for an HIV test should be taught to all doctors. Sexually transmitted infections (STIs) are infectious diseases spread through sexual contact.
 About 50 out of 100 new STIs occur in people ages 15 to 24 years in 2021, 27% of all new HIV infections were among young people. In sub-Saharan Africa, young women are twice more likely to have HIV than young men. Most infections among young people outside sub-Saharan Africa are in those also in other high-risk groups. Adolescents with HIV often do not know they are HIV positive
According to the World Health Organization (WHO), 374 million new STI infections are expected worldwide in 2020. Chlamydia, gonorrhea and syphilis, are the most prevalent STIs. Due to a number of circumstances, including inadequate access to sexual health services, ignorance, and participating in risky sexual practices, adolescents are especially susceptible to STIs.
Comprehensive sexual education programs, easily accessible healthcare facilities, and the promotion of responsible sexual behavior must all be prioritized in the fight against the spread of HIV and STIs among adolescents. To stop the spread of the disease and ensure the wellbeing of children, regular testing, early diagnosis, and proper treatment are necessary.
1.	To protect adolescents from STIs, it is advised to:
2.	Avoid any type of sexual contact with another person.
3.	If sexually active, follow these safety measures:
4.	Have a mutually monogamous sexual relationship with an uninfected partner.
5.	Use (consistently and correctly) a male latex or female polyurethane condom, even for oral sex.
6.	Reduce the chance of HIV infections by preventing and controlling other STIs. Having another STI makes it easier to get infected with HIV.
7.	Consider HIV prevention treatments such as PEP (post-exposure prophylaxis) and PrEP (pre-exposure prophylaxis).
8.	If having sex with someone who is HIV-positive, ensure that the other person is taking their HIV medicines and that their viral load is completely under control (undetectable).
9.	Delay having sexual relationships as long as possible. The younger a person is when they start to have sex for the first time, the more susceptible they are to getting an STI.
10.	Have regular checkups for HIV and STIs.
Learn the symptoms of STIs and get medical help as soon as possible if any symptom arises
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 7,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 163,
                'country_code' => 'ZW',
                'title' => "THE CONNECTION BETWEEN HIV AND OTHER STIS?",
                'description' => "Sexually transmitted infections (STI) are one of the most frequent acute illnesses in the world, with over one million infections acquired every day.1 Although trend statistics can be skewed due to inconsistent school_helpline and disparities in healthcare systems, there has been a definite increase in the incidence of Chlamydia trachomatis, gonorrhea, syphilis, and venereal lymph granuloma, during the last years. In contrast, the incidence of HIV has been steadily declining in recent years.
STIs such as syphilis and gonorrhea induce physical alterations that provide the HIV virus better access to susceptible cells and tissues in the body. STI co-infection also increases the infectivity of the person with HIV, making them more likely to transmit the virus to others.
HIV and AIDS are two sexually transmitted infections (STIs) that are commonly linked because the same behaviors and settings that raise a person's risk of contracting one infection also increase that person's risk of contracting the other. If an untreated STI exists, the likelihood of developing HIV increases. Furthermore, having a sore or breach in the skin caused by a STI may allow HIV to enter the body more easily. HIV and HSV have medications that can inhibit the infection, but there are no cures for any viral STIs at the moment. Condoms, when used properly and regularly, are an excellent technique of preventing STIs and HIV.

Behaviors that put people at risk for HIV also increase their risk for other STIs. These behaviors include the following:
1. Having sex without using a condom.
2. Having intercourse with multiple partners, particularly anonymous partners.
3. Having sex while using drugs or alcohol. Drug and alcohol use can impair judgment, leading to dangerous actions.
Having a STI can make it simpler to contract HIV. For example, a STI can cause a sore or a break in the skin, making it easier for HIV to enter the body. Having HIV and another STIs may increase the risk of HIV transmission.

Ways of prevention
Reduce the number of people you have sex with.
Do not drink alcohol or use drugs before and during sex.
Use condoms correctly every time you have sex.
If you’re viral load is not undetectable or does not stay undetectable, you can still protect your partner from HIV by using condoms and choosing less risky sexual behaviors. Your partner can take medicine to prevent getting HIV, which is called pre-exposure prophylaxis (PrEP). PrEP is an HIV prevention option for people who do not have HIV but who are at risk of getting HIV. PrEP involves taking a specific HIV medicine every day to reduce the risk of getting HIV through sex or injection drug use.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 5,
                'author_id' => 7,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],

            // 20 - Leadership & Values
            [
                'id' => 164,
                'country_code' => 'ZW',
                'title' => "What Are the 6 C’s of Leadership?",
                'description' => "1. Character: Character refers to the personal and moral qualities of a leader, including integrity, trustworthiness, and honesty. Leaders with strong character inspire trust and serve as role models for their followers.

2. Competence: Competence involves having the necessary knowledge, skills, and abilities to effectively lead and perform in a particular role or industry. Leaders who are competent are well-respected and capable of making informed decisions.

3. Communication: Effective communication is crucial for leaders to convey their vision, goals, expectations, and feedback to their team members. Leaders who possess strong communication skills can listen actively, articulate ideas clearly, and foster open and honest dialogue.

4. Collaboration: Collaboration is the ability to work with others, both within and outside one's team or organization, to achieve common goals. Leaders who promote a collaborative environment encourage teamwork, value diverse perspectives, and foster a sense of belonging and inclusivity.

5. Courage: Courage refers to the ability to take risks, make tough decisions, and confront challenges or difficult situations head-on. Leaders need to be brave, resilient, and willing to push boundaries in order to achieve meaningful results.

6. Compassion: Compassion is the capacity to empathize with others, understand their needs, and act with kindness and sensitivity. Leaders who demonstrate compassion build strong relationships, create a supportive work environment, and prioritize the well-being and growth of their team members.

By embodying the six Cs of leadership, individuals can become effective leaders who inspire, motivate, and bring out the best in their teams.

",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 2,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 165,
                'country_code' => 'ZW',
                'title' => "Understand That Talk is Work",
                'description' => "•	Outstanding leadership depends on trusting and positive relationships that are built over time for the long-term benefit of the people and their organization.
•	Outstanding leaders therefore recognize the importance of finding opportunities for dialogue with their colleagues at every turn, using them to discover individuals and nurture social capital. This doesn’t mean creating ‘talking shops’ in order to avoid taking action, instead they view dialogue as the pre-cursor to acting effectively, efficiently and with commitment.
•	Outstanding leadership means that leaders spend huge amounts of time talking with people to share stories of success and aspiration, encourage ideas and possibilities to emerge, discover hidden potential and/or problems and learn what inspires and engages others.

Absolutely! In leadership, talk is indeed an essential form of work. Effective communication plays a vital role in driving organizational success and achieving desired outcomes. Here's how talk can be considered work in leadership:

1. Setting goals and expectations: Through effective communication, leaders articulate the organization's goals and clearly define expectations for their team members. This helps align everyone's efforts towards a common purpose.

2. Providing guidance and direction: Leaders use talk to provide guidance and direction to their team members. They communicate tasks, responsibilities, and deadlines, ensuring that everyone is on the same page and understands what needs to be done.

3. Inspiring and motivating: Leaders use their words to inspire and motivate their team members. They communicate a compelling vision, share stories of success, and provide encouragement. This helps boost morale and encourages individuals to give their best.

4. Active listening: Listening is an integral part of effective communication. Leaders actively listen to their team members, paying attention to their ideas, concerns, and feedback. By doing so, they demonstrate respect and empathy, which fosters trust and collaboration.

5. Building relationships and trust: Through talk, leaders build strong relationships with their team members. They engage in open and honest conversations, demonstrate support, and create a safe environment for voicing opinions. This helps develop trust and strengthens working relationships.

6. Resolving conflicts: Communication is crucial for resolving conflicts and addressing issues within a team. Leaders facilitate constructive dialogue, encourage open communication, and help find mutually beneficial solutions. This enables conflicts to be resolved effectively, maintaining a harmonious work environment.

7. Collaboration and teamwork: Talk facilitates collaboration and teamwork. Leaders encourage open dialogue, idea sharing, and active participation. Through effective communication, they foster a culture of collaboration, where individuals feel comfortable contributing their perspectives and working together towards shared goals.

8. Feedback and coaching: Leaders provide feedback and coaching through meaningful conversations. They offer constructive criticism, recognize achievements, and provide guidance for improvement. These conversations contribute to individual and team growth.

9. Building a positive culture: Leaders use talk to shape the organizational culture. They communicate values, norms, and expectations, reinforcing desired behaviors. By fostering a positive culture through their words, leaders create an environment where individuals can thrive.

In summary, talk is indeed work in leadership. Effective communication is a key aspect of leadership, enabling goal-setting, guidance, motivation, trust-building, conflict resolution, collaboration, feedback, coaching, and shaping organizational culture. By recognizing the importance of talk, leaders can leverage it to create a positive and productive work environment.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 2,
                'author_id' => 5,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 166,
                'country_code' => 'ZW',
                'title' => "Self-awareness and authentic to leadership first, their own needs second",
                'description' => "Being self-aware and authentic in leadership is crucial for several reasons:

1. Establishing trust and credibility: When leaders are self-aware and authentic, they are perceived as genuine and trustworthy. This builds a foundation of trust with their team members, fostering open communication and collaboration.

2. Inspiring and motivating others: Authentic leaders who are aware of their own strengths, weaknesses, and values can inspire others by being true to themselves. Their authenticity creates an environment where others feel comfortable to express themselves and be their best selves.

3. Building positive relationships: Self-awareness allows leaders to understand their own emotions and how they impact others. It also helps them recognize the emotions and needs of their team members. By being authentic and empathetic, leaders can build positive relationships and create a supportive work environment.

4. Effective decision-making: Self-awareness enables leaders to identify their biases, blind spots, and limitations. This awareness allows them to make more objective and informed decisions. Authentic leaders consider different perspectives and seek input from others, leading to better outcomes for the organization.

5. Resolving conflicts: Leaders who are self-aware can recognize their own role in conflicts and take responsibility for their actions. They can effectively manage conflicts by staying calm, listening empathetically, and finding solutions that consider all parties involved.

6. Personal growth and development: Self-aware leaders understand their own strengths and areas for improvement. They actively seek feedback, engage in self-reflection, and pursue personal development opportunities. This continuous growth benefits both the leader and their team.

7. Role modeling behavior: Authenticity in leadership sets an example for others to follow. When leaders are true to themselves and prioritize their values, it encourages team members to do the same. This creates a culture of authenticity, where everyone feels empowered to be their authentic selves.

In conclusion, being self-aware and authentic in leadership is essential for building trust, inspiring others, fostering positive relationships, making effective decisions, resolving conflicts, personal growth, and serving as a role model. By prioritizing self-awareness and authenticity, leaders can create a positive and inclusive work environment that maximizes the potential of their team members.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 2,
                'author_id' => 5,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 167,
                'country_code' => 'ZW',
                'title' => "Problem solving in leadership",
                'description' => "Problem-solving in leadership refers to the ability of a leader to identify, analyze, and find effective solutions to various challenges or issues that arise within a team or organization. It is a crucial skill for leaders as they navigate complex situations, make informed decisions, and drive progress towards goals. Here are some key aspects of problem-solving in leadership:

1. Recognizing and defining problems: A leader should have the ability to identify and define problems accurately. This involves understanding the underlying causes, gathering relevant information, and determining the scope and impact of the problem.

2. Analytical thinking: Effective problem-solving requires analytical thinking skills. Leaders must be able to break down complex issues into manageable components, analyze available data, and assess different options or alternatives.

3. Creativity and innovation: Leaders need to think creatively to generate innovative and viable solutions. This involves exploring new ideas, challenging assumptions, and considering alternative approaches. Encouraging creativity within the team can help foster a culture of innovation.

4. Collaboration and teamwork: Problem-solving is often most effective when approached collaboratively. Leaders should encourage open communication, facilitate brainstorming sessions, and promote a sense of collaboration and collective responsibility. Seeking input from team members with diverse perspectives can lead to more comprehensive solutions.

5. Decision-making: Leaders must make timely and well-informed decisions based on the analysis of available information. This involves evaluating the potential risks and benefits of different options, weighing various factors, and considering the long-term implications of decisions.

6. Implementation and monitoring: Problem-solving shouldn't stop at finding a solution. Leaders need to ensure effective implementation of the chosen solution, set clear goals and action plans, delegate responsibilities, and monitor progress. Regular evaluation and adjustments may be necessary to address any unforeseen challenges or changes.

.

Problem-solving is of utmost importance in leadership for several reasons:

1. Overcoming obstacles: Problems and challenges are inevitable in any organization. Leaders who possess strong problem-solving skills can quickly identify and address these obstacles, allowing the team to move forward and achieve their goals.

2. Strategic decision-making: Problem-solving involves analyzing different options, evaluating risks and benefits, and making informed decisions. Leaders who excel at problem-solving can effectively navigate complex situations and make strategic choices that have a positive impact on the organization.

3. Enhancing team productivity and morale: When leaders are adept at solving problems, they can provide clear direction to their team members, offer guidance, and remove barriers to productivity. By addressing issues promptly and efficiently, leaders foster a positive work environment and boost employee morale.

4. Innovation and creativity: Problem-solving often requires thinking outside the box and seeking innovative solutions. Leaders who encourage creative problem-solving empower their teams to think creatively, generate new ideas, and drive innovation within the organization.

5. Building trust and credibility: Effective problem-solving builds trust and credibility among team members. When leaders successfully solve problems, they demonstrate competence, reliability, and a commitment to the well-being and success of the team. This helps foster a culture of trust and encourages open communication.

6. Adaptability and resilience: Strong problem-solving skills enable leaders to adapt to changing circumstances and overcome setbacks. This agility allows leaders to guide their teams through challenging times and maintain a positive outlook, inspiring resilience and perseverance among team members.


In conclusion, problem-solving is crucial for leaders as it enables them to overcome challenges, make sound decisions, inspire their teams, foster innovation, build trust, and promote continuous improvement. By honing their problem-solving skills, leaders can effectively navigate complex situations and drive success within their organizations.effective problem-solving in leadership requires a combination of critical thinking, creativity, collaboration, decision-making, implementation, and a focus on continuous improvement. By mastering this skill, leaders can effectively address challenges, drive innovation, and create a positive and productive environment within their teams or organizations.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 2,
                'author_id' => 5,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 168,
                'country_code' => 'ZW',
                'title' => "Rising Above Challenges: The Power of Resilient Leadership",
                'description' => "Introduction:
Leadership is not always easy, and challenges are bound to come your way. Resilient leadership is about facing those challenges head-on, bouncing back from setbacks, and inspiring others to do the same. In this article, we'll explore the concept of resilient leadership and how young people like you can develop resilience and lead effectively.
 Embrace Change:
Resilient leaders understand that change is a part of life. Embrace change as an opportunity for growth and improvement. Adaptability is key in navigating uncertain situations and leading others through transitions.
 Maintain a Positive Mindset:
A positive mindset is crucial for resilient leaders. Focus on solutions rather than dwelling on problems. Encourage optimism and inspire others to see challenges as opportunities for learning and personal growth.
 Practice Self-Care:
Resilient leaders prioritize self-care. Take care of your physical, mental, and emotional well-being. Get enough sleep, eat nourishing food, and make time for activities that bring you joy and relaxation. When you take care of yourself, you have more energy to lead effectively.
Foster a Supportive Network:
Resilient leaders surround themselves with a supportive network. Build relationships with positive and like-minded individuals who can provide guidance, encouragement, and perspective. Seek mentors who can offer valuable insights and support your growth as a leader.
Learn from Setbacks:
Resilient leaders view setbacks as opportunities for learning and growth. When faced with challenges, reflect on what went wrong and identify lessons to be learned. Use these experiences to build resilience and develop strategies for future success.
 Encourage Perseverance:
Resilient leaders understand the value of perseverance. Encourage yourself and others to keep going, even when things get tough. Remind yourself of your goals and the positive impact you can make. Inspire others to persevere by setting an example of determination and resilience.
 Communicate Openly:
Resilient leaders foster open and honest communication. Encourage others to share their thoughts, concerns, and ideas. Create a safe space for open dialogue and problem-solving. Effective communication builds trust and strengthens resilience in teams.
Celebrate Successes:
Resilient leaders celebrate both small and big successes. Acknowledge and appreciate the progress made along the way. Celebrate achievements to uplift spirits and inspire motivation in yourself and others.
Conclusion:
Resilient leadership is about embracing change, maintaining a positive mindset, and practicing self-care. It's about learning from setbacks, fostering a supportive network, and encouraging perseverance. By developing resilience, you can face challenges head-on and inspire others to do the same. Embrace the power of resilient leadership, and together, we can overcome any obstacle and achieve greatness.


",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 2,
                'author_id' => 8,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 169,
                'country_code' => 'ZW',
                'title' => "Leading with Inclusion: Embrace Diversity and Make a Difference",
                'description' => "Introduction:
Leadership is not just about guiding others; it's about creating a space where everyone feels valued and included. Inclusive leadership is a powerful way to lead, embracing diversity and promoting equality. In this article, we'll explore the concept of inclusive leadership and how young people like you can make a positive impact.
Embrace Diversity:
Inclusive leaders celebrate diversity in all its forms. Recognize and appreciate the unique qualities that each person brings to the table. Embrace different backgrounds,abilities, perspectives, and experiences. When you value diversity, you create rich  ideas and contributions.
Create a Safe Space:
Inclusive leaders foster a safe and inclusive environment where everyone feels respected and heard. Encourage open communication, active listening, and mutual respect. Create a space where people can freely express themselves without fear of judgment.
Challenge Bias and Stereotypes:
Inclusive leaders challenge bias and stereotypes. Be aware of your own biases and work to overcome them. Treat others as individuals, not as stereotypes. Encourage others to do the same and promote a culture of fairness and equality.
 Encourage Collaboration:
Inclusive leaders understand the power of collaboration. Encourage teamwork, cooperation, and the exchange of diverse ideas. Create opportunities for everyone to contribute and be heard. When everyone's voice is valued, innovation and creativity flourish.
Practice Empathy:
Empathy is a key quality of inclusive leaders. Put yourself in others' shoes and try to understand their experiences and emotions. Show compassion and support to those who may be facing challenges. By practicing empathy, you build strong connections and foster a sense of belonging.
 Lead by Example:
Inclusive leaders lead by example. Model inclusive behavior in your actions and interactions. Treat everyone with fairness and kindness. Be an advocate for diversity and inclusion, and inspire others to follow suit.
 Continuous Learning:
Inclusive leadership is a journey of continuous learning. Educate yourself about different cultures, backgrounds, and perspectives. Seek out opportunities to expand your knowledge and challenge your assumptions. Stay open-minded and be willing to learn from others.
Conclusion:
Inclusive leadership is about embracing diversity, promoting equality, and creating an inclusive environment. By valuing and respecting others, challenging biases, and practicing empathy, you can make a positive impact as an inclusive leader. Embrace the power of inclusive leadership, and together, we can build a world where everyone feels valued and included.

",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 2,
                'author_id' => 8,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 170,
                'country_code' => 'ZW',
                'title' => "Leading with Integrity: The Power of Ethical Leadership",
                'description' => "Introduction:
Being a leader means making choices that are fair, honest, and respectful. Ethical leadership is all about doing the right thing, even when it's not the easiest option. In this article, we'll explore what it means to be an ethical leader and how young people like you can make a positive impact.
 Be Honest and Transparent:
Ethical leaders value honesty and transparency. Always tell the truth, even if it's difficult. Be open about your intentions and actions. When you're honest and transparent, people trust you and feel comfortable following your lead.
 Treat Others with Respect:
Respect is a fundamental aspect of ethical leadership. Treat everyone with kindness, regardless of their background or position. Listen to their ideas and opinions, and value their contributions. When you respect others, you create a supportive and inclusive environment.
 Make Fair Decisions:
Ethical leaders make decisions that are fair and just. Consider the impact of your choices on others and strive for fairness. Avoid favoritism or discrimination. Treat everyone equally and give everyone a chance to succeed.
Take Responsibility:
Leadership means taking responsibility for your actions. If you make a mistake, admit it and learn from it. Don't blame others or make excuses. By taking responsibility, you show integrity and inspire others to do the same.
Stand Up for What's Right:
Ethical leaders have the courage to stand up for what's right, even in the face of opposition. If you witness unfairness, injustice, or unethical behavior, speak up. Use your voice to advocate for positive change and make a difference.
Lead by Example:
Actions speak louder than words. Be a role model for ethical behavior. Show others what it means to be an ethical leader through your actions. When you lead by example, you inspire others to follow your lead.
Continuously Learn and Improve:
Ethical leadership is a journey of continuous learning and improvement. Stay informed about ethical issues and seek to expand your knowledge. Reflect on your actions and seek feedback from others. By constantly growing, you become a better leader.
Conclusion:
Being an ethical leader means doing the right thing, treating others with respect, and making fair decisions. It's about taking responsibility, standing up for what's right, and leading by example. Remember, ethical leadership is a lifelong commitment to making a positive impact on those around you. Embrace your role as an ethical leader, and together, we can create a better and more just world.


",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 2,
                'author_id' => 8,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 171,
                'country_code' => 'ZW',
                'title' => "The Power of Leadership Values",
                'description' => "
Introduction:
Leadership is not just about holding a position of authority; it is about inspiring and guiding others towards a common goal. To become effective leaders, young people must understand the importance of leadership values. These values serve as a compass, guiding their actions and decisions while setting an example for others to follow. In this article, we will explore the significance of leadership values and how they can shape the future of young leaders.
Integrity:
Integrity is the foundation of strong leadership. It involves being honest, ethical, and consistent in one's actions and words. Leaders with integrity gain the trust and respect of their peers, subordinates, and superiors. They are transparent in their decision-making processes and take responsibility for their mistakes. By upholding integrity, young leaders can build a reputation that will open doors to greater opportunities.
Empathy:
Empathy is the ability to understand and share the feelings of others. It allows leaders to connect with their team members on a deeper level, fostering trust and collaboration. Young leaders who practice empathy create an inclusive environment where everyone feels valued and heard. By considering different perspectives and needs, they can make informed decisions that benefit the entire team.
Accountability:
Accountability is crucial for effective leadership. It involves taking ownership of one's actions and outcomes, both individually and as a team. Young leaders who embrace accountability set high standards for themselves and encourage others to do the same. They acknowledge their mistakes, learn from them, and strive for continuous improvement. By holding themselves accountable, they inspire others to do the same, creating a culture of excellence.
Resilience:
Resilience is the ability to bounce back from setbacks and challenges. Leaders who possess resilience demonstrate determination, perseverance, and adaptability in the face of adversity. Young leaders must understand that failure is not a roadblock but an opportunity for growth. By embracing resilience, they inspire their team members to overcome obstacles and achieve success.
Vision:
A strong leader has a clear vision of the future and inspires others to work towards it. Young leaders should develop a compelling vision that aligns with their values and goals. By communicating this vision effectively, they can motivate and empower their team members to strive for greatness. A well-defined vision provides direction and purpose, driving everyone towards a common objective.
Conclusion:
Leadership values are the guiding principles that shape the behavior and actions of young leaders. By embracing values such as integrity, empathy, accountability, resilience, and vision, young people can become effective leaders who inspire positive change in their communities and beyond. These values not only benefit the individuals themselves but also create a ripple effect that impacts those around them. As young leaders embark on their leadership journey, they must remember that their values will be the compass that guides them towards success.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 2,
                'author_id' => 8,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 172,
                'country_code' => 'ZW',
                'title' => "Coaching and mentoring in leadership",
                'description' => "Coaching and mentoring are two approaches that leaders can employ to facilitate the growth, development, and success of their team members. While they share similarities, there are distinct differences between coaching and mentoring:

1. Coaching: Coaching is a process whereby leaders engage in one-on-one conversations with their team members to help them achieve specific goals, improve performance, and enhance their skills. It is usually focused on the present or near future. Key aspects of coaching include:

- Goal setting: The leader and the team member work together to set clear and achievable goals.
- Active listening: The leader listens attentively, asks probing questions, and seeks to understand the team member's perspectives and challenges.
- Guidance and support: The leader provides guidance, feedback, and resources to help the team member develop necessary skills and overcome obstacles.
- Accountability: Regular check-ins and progress evaluations ensure that the team member remains on track towards achieving their goals.
- Problem-solving: The leader helps the team member identify potential solutions and develop action plans to address any issues that may arise.

2. Mentoring: Mentoring is a long-term relationship where a more experienced individual (the mentor) shares their knowledge, experiences, and insights with a less experienced individual (the mentee) to support their personal and professional development. Key aspects of mentoring include:

- Sharing experiences: The mentor draws on their own experiences to provide guidance and perspective to the mentee.
- Career development: Mentors assist mentees in identifying career goals, exploring different paths, and making informed decisions.
- Networking: Mentors can help mentees expand their professional networks and connect with relevant contacts in their field.
- Role modeling: Mentors demonstrate positive behaviors, values, and skills, serving as role models for their mentees.
- Emotional support: Mentors provide encouragement, motivation, and advice to help mentees navigate challenges and build confidence.
•	Benefits of Coaching and mentoring
1. Personalized Development: Coaching and mentoring offer personalized support and guidance tailored to the specific needs and goals of the individual. This personalized approach helps individuals identify their strengths, weaknesses, and areas for improvement.

2. Skill Enhancement: Through coaching and mentoring, individuals can enhance their skills and knowledge in specific areas. This can include improving technical expertise, refining communication skills, developing leadership abilities, and more.

3. Increased Confidence: The guidance and support provided through coaching and mentoring can help individuals build confidence and self-assurance. By receiving encouragement, feedback, and constructive criticism, individuals are empowered to take on new challenges and push beyond their comfort zones.

4. Career Advancement: Both coaching and mentoring can contribute to professional growth and career advancement. Mentors can offer valuable insights into navigating career paths, expanding networks, and accessing opportunities. Coaches can assist in setting career goals, developing action plans, and providing ongoing support throughout the journey.

5. Improved Performance: Coaching and mentoring play a significant role in improving performance. By focusing on individual needs, identifying areas for improvement, and setting clear goals, individuals can enhance their performance and achieve desired outcomes.

6. Enhanced Problem-Solving Skills: Coaching and mentoring help individuals develop effective problem-solving skills. Through discussions and guided reflections, individuals learn how to approach challenges, analyze situations, and generate creative solutions.

7. Knowledge Transfer: Mentoring allows for the transfer of knowledge, wisdom, and experiences from experienced individuals to those with less experience. This knowledge sharing not only benefits the mentee but also contributes to the overall growth and development of the organization.

8. Building Relationships: Coaching and mentoring establish strong relationships based on trust, respect, and open communication. These relationships foster a positive work environment, encourage collaboration, and promote a supportive culture within the organization.

9. Retention and Engagement: Investing in coaching and mentoring programs demonstrates a commitment to employee development and growth. This can increase employee engagement, loyalty, and job satisfaction, leading to higher retention rates.

In summary, coaching focuses on specific goals, enhancing skills, and improving performance in the present, while mentoring is a long-term relationship aimed at overall personal and professional development. Both coaching and mentoring can be valuable tools for leaders to support their team members' growth and success.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 2,
                'author_id' => 1,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],


            // 22 - Mental health and Well-being
            [
                'id' => 173,
                'country_code' => 'ZW',
                'title' => "BENEFITS OF MENTAL AWARENESS",
                'description' => "INTRODUCTION:
It's impossible to have a conversation about health and wellness without talking about mental health. Our well being affected by all aspects of our lives, and that, in turn, affects how we experience life, work, and time with our loved on. Mental health awareness is an important social movement to both improve understanding and increase access to healthcare. Mental health awareness is critical to promoting mental health treatment and behavioral health. It’s a necessary and foundational conversation for changing to a more proactive model of mental health.
BENEFITS OF MENTAL AWARENESS
•	 Helps you understand your symptoms
Sometimes, there is magic in having a diagnosis. Despite the stigma around the term, it’s simply a shorthand for a collection of symptoms that occur together. Especially with mental health conditions, which are difficult to pinpoint and sometimes impossible to find on a test, a diagnosis can be incredibly validating. It can help people feel less alone and make it easier to find treatment. Pay attention to your symptoms. For example, you might feel like your mental health worsens with social media use.
•	Promotes mental illness
Many of us have fallen into the trap of thinking of mental health as solely related to mental illness. However, it's possible to have a mental health condition and be mentally fit, and the absence of a mental health condition doesn't necessarily ensure mental fitness. Expanding our understanding of mental health issues and wellness to incorporate mental fitness, a proactive approach to emotional health, well-being, and cognitive agility. It allows us to live life with more purpose, clarity, and passion. Reducing the stigma around mental health is an important step to embracing mental fitness.
•	Better education
It's crucial for caregivers, employers, parents, family members, and loved ones to understand the impact that mental health has on daily life. However, while mental health conditions can make daily life more difficult, they also don't have to prevent you from having a fulfilling and engaging life. When the people in your life understand and prioritize mental health care, it makes it easier to take the actions you need to do to take care of yourself and thrive.
•	Starts a conversation
Mental health awareness is an ongoing conversation, but up until recently, it's only been had in whispers. But because a common feature of many moods and anxiety disorders is distorted thinking, talking about it can actually be immensely therapeutic. Building a support network and speaking with a licensed mental health professional is critical to alleviating symptoms of many mental health conditions. Unfortunately, stigma creates silence. It also makes it difficult to ask for support at work or in other environments that might be made more challenging by a mental health diagnosis.

",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 9,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 174,
                'country_code' => 'ZW',
                'title' => "WAYS TO PREVENT MENTAL ILLNESS",
                'description' => "Avoid self-medication
•	 Keep an eye out for hooks. If you crave or rely on alcohol, drugs, caffeine, or sweets to escape, numb, or raise your energy, it might be a clue you need to raise your dopamine and endorphins.
Use music as therapy
•	 Listen to music, make music, sing songs, dance, and hit repeat. Neurologist Oliver Sacks asserts that music “can lift us out of depression when nothing else can.” His work reveals us as “musical species” who benefit immensely from its extraordinary healing power.
Do not go alone
•	Healing, growth, resilience, and well-being happen in a community. Any efforts towards them are enhanced when we have caring people to cheer us on and hold us accountable. Relationships are protective factors, buffers, and enhancers of mental health.
Avoid social comparison
•	 Use examples of success as motivation, not self-sabotage. Watch out for people that present a perfect picture of life—their neatly packaged story isn’t the full story.
Count your blessings
•	Studies show that practicing gratitude positively boosts mental health. Happiness researcher Sonja Lyubomirsky explains that heartfelt, intermittent, intentional practice is better than constant passive, automated expressions of thankfulness.
Empowerment
•	Increase in public awareness of mental health might be needed to increase the acceptance of mental health care for promotion and prevention of illnesses. Education for earlier recognition of problems and appropriate help-seeking would be important issues. Moreover, social network and social support may prevent mental health problems, such as mental health problems in children and cognitive decline, as well as promote well-being. Community-based interventions including education and enhancing social capitals might contribute to mental health promotion.

Stress management skills training
•	Managing daily life stress and helping recovery from adversity are important for mental health promotion.4 Since the interaction of the brain, mind, and body is involved in stress reaction, interventions based on mind-body medicine have been suggested as an effective mean for managing stress. Cognitive behavioral approaches, so called cognitive-behavioral stress management (CBSM), are the most widely researched interventions based on the notion that cognition influences emotions and behavior. Therefore, the primary goal of the therapy is the finding irrational thought patterns and replacing those with more rational thoughts. It also includes behavioral techniques, such as breathing and relaxation exercises.
Others
•	Ethnic minorities integration
•	Positive interpersonal interactions
•	Social participation
•	Social responsibility and tolerance
•	Social services
•	Social support and community networks
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 9,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 175,
                'country_code' => 'ZW',
                'title' => "EFFECTS OF MENTAL ILLNESS",
                'description' => "INTRODUCTION:
Mental health has effect on students, society, family and partners. Effects depends on the type of mental illness.
EFFECTS ON STUDENTS
Mental health problems can affect many areas of students’ lives, reducing their quality of life, academic achievement, physical health, and satisfaction with the college experience, and negatively impacting relationships with friends and family members. These issues can also have long-term consequences for students, affecting their future employment, earning potential, and overall health. Mental health problems can affect a student’s energy level, concentration, dependability, mental ability, and optimism, hindering performance. Research suggests that depression is associated with lower grade point averages, and that co-occurring depression and anxiety can increase this association. Depression has also been linked to dropping out of school. Peers, family members, faculty, and staff may be personally affected out of concern for these students. Depression and anxiety can have harmful effects on relationships and work productivity. Suicide and suicidal thoughts can affect the larger campus community. Roommates, peers, faculty, and staff also experience profound grief over student suicides and suicidal behavior.
EFFECTS ON RELATIONSHIPS
Mental health conditions can place pressure on relationships. Some people with mental health conditions will feel a sense of isolation and disconnection from their communities. Sometimes the treatment of a mental health condition creates challenges, such as the various side effects of medication.
STIGMA AND DISCRIMINATION
Stigma and discrimination are a reality for many people who live with a mental health condition, and it may impact their willingness to disclose their condition and seek support. People with mental always feel unwanted and lonely.
UNHAPPINESS
Mental health disorders disrupt the brain’s functioning, and often one’s ability to experience pleasure and happiness. Over time, these feelings can grow to a point where one can no longer explain them. They may disrupt one’s ability to function in their day-to-day life.
EFFECTS ON THE BOBY
Weakened immune system. Mental illness can take a toll on the mind and, in turn, take a physical toll on the body. It can weaken your immune system and make it harder for your body to prevent infections.
Chronic physical conditions. Untreated mental health disorders have been linked to physical ailments. This is not a surprise, as the brain and body are so closely related. Mental illness can create chronic stress and distress in individuals, increasing their risk for medical conditions. For example, the CDC cites that depression increases the risk for long-lasting health problems like diabetes, heart disease, and stroke.
Unhealthy habits. Mental illness can prevent a person from properly taking care of themselves. Sometimes that manifest in their eating habits, while other times it reflects in their sleeping patterns or personal hygiene and care. Poor eating habits can lead to obesity or malnutrition. Poor sleeping habits can have a spiraling effect on your body, including chronic fatigue, irritability, and decreased libido.
Self-harm and suicide. Suicide is the 10th leading cause of death in the United States, with an average of 130 suicides per day. The vast majority of suicides (more than 90 percent) stem from unaddressed mental illness. Over time, mental illness can diminish one’s desire to live—or, it can cloud one’s judgement so much that they see no other way.

",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 9,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 176,
                'country_code' => 'ZW',
                'title' => "TREATMENT OF MENTAL ILLNESS",
                'description' => "INTRODUCTION:
Treatment of mental illness usually depends with the type and nature of mental illness. Sometimes it's difficult to find out which mental illness may be causing your symptoms. But taking the time and effort to get an accurate diagnosis will help determine the appropriate treatment. The more information you have, the more you will be prepared to work with your mental health professional in understanding what your symptoms may represent.

TREATEMENT
If you have a mild mental illness with well-controlled symptoms, treatment from your primary care provider may be sufficient. However, often a team approach is appropriate to make sure all your psychiatric, medical and social needs are met.
•	MEDICATION
Although psychiatric medications don't cure mental illness, they can often significantly improve symptoms. Psychiatric medications can also help make other treatments, such as psychotherapy, more effective. The best medications for you will depend on your particular situation and how your body responds to the medication.
•	PSYCHOTHERAPY
Psychotherapy, also called talk therapy, involves talking about your condition and related issues with a mental health professional. During psychotherapy, you learn about your condition and your moods, feelings, thoughts and behavior. With the insights and knowledge you gain, you can learn coping and stress management skills. There are many types of psychotherapy, each with its own approach to improving your mental well-being. Psychotherapy often can be successfully completed in a few months, but in some cases, long-term treatment may be needed. It can take place one-on-one, in a group or with family members. When choosing a therapist, you should feel comfortable and be confident that he or she is capable of listening and hearing what you have to say. Also, it's important that your therapist understands the life journey that has helped shape who you are and how you live in the world.

•	HOSPITAL AND RESIDENTIAL TREATMENT PROGRAM
Sometimes mental illness becomes so severe that you need care in a psychiatric hospital. This is generally recommended when you can't care for yourself properly or when you're in immediate danger of harming yourself or someone else. Options include 24-hour inpatient care, partial or day hospitalization, or residential treatment, which offers a temporary supportive place to live. Another option may be intensive outpatient treatment.

•	SUBSTANCE MISUSE TREATMENT
Problems with substance use commonly occur along with mental illness. Often it interferes with treatment and worsens mental illness. If you can't stop using drugs or alcohol on your own, you need treatment. Talk to your doctor about treatment options.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 9,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 177,
                'country_code' => 'ZW',
                'title' => "IMPORTANCE OF PROMOTING MENTAL WELL-BEING",
                'description' => "INTRODUCTION:
Whether young or old, the importance of mental health for total well-being cannot be overstated. When psychological wellness is affected, it can cause negative behaviors that may not only affect personal health but can also compromise relationships with others.
ADVANTAGES OF MENTAL WELL-BEING
A Stronger Ability to Cope with Life’s Stressors
When mental and emotional states are at peak levels, the challenges of life can be easier to overcome.
Where alcohol/drugs, isolation, tantrums, or fighting may have been adopted to manage relationship disputes, financial woes, work challenges, and other life issues a stable mental state can encourage healthier coping mechanisms.
A Positive Self-Image
Mental health greatly correlates with personal feelings about oneself. Overall mental wellness plays a part in your self-esteem. Confidence can often be a good indicator of a healthy mental state. A person whose mental health is flourishing is more likely to focus on the good in themselves. They will hone in on these qualities, and will generally have ambitions that strive for a healthy, happy life.
Healthier Relationships
If your mental health is in good standing, you might be more capable of providing your friends and family with quality time, affection, and support. When you're not in emotional distress, it can be easier to show up and support the people you care about.
Better Productivity
Dealing with depression or other mental health disorders can impact your productivity levels. If you feel mentally strong, it's more likely that you will be able to work more efficiently and provide higher quality work.
Higher Quality of Life
When mental well-being thrives, your quality of life may improve. This can give room for greater participation in community building. For example, you may begin volunteering in soup kitchens, at food drives, shelters, etc.
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 9,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 178,
                'country_code' => 'ZW',
                'title' => "TYPES OF MENTAL ILLNESS",
                'description' => "INTRODUCTION
A mental illness is a health problem that significantly affects how a person feels, thinks, behaves, and interacts with other people. It is diagnosed according to the causes and type of mental. The following are some of the types of mental illness.
TYPES OF MENTAL ILLNESS
MAJOR DEPRESSIVE DISORDER
SYMPTOMS OF DEPRESSION
•	feelings of sadness,
•	Angry outbursts
•	irritability
•	Loss of interest or pleasure in most or all normal activities, such as sex, hobbies or sports
•	Sleep disturbances, including insomnia or sleeping too much
•	Tiredness and lack of energy, so even small tasks take extra effort
•	Reduced appetite and weight loss or increased cravings for food and weight gain
•	Anxiety, agitation or restlessness
•	Slowed thinking, speaking or body movements
•	Feelings of worthlessness or guilt, fixating on past failures or self-blame
•	Trouble thinking, concentrating, making decisions and remembering things
•	Frequent or recurrent thoughts of death, suicidal thoughts, suicide attempts or suicide

POST TRAUMATIC STRESS DISORDER

Post-traumatic stress disorder (PTSD) is a disorder that develops in some people who have experienced a shocking, scary, or dangerous event.
SYMPTOMS
•	experiencing the trauma
•	repetitive memories (or flashbacks) that are hard to control and intrude into everyday life
•	nightmares
•	extreme distress caused by reminders of the trauma
•	memories or disturbing thoughts that can be prompted by smells, sounds, words or other triggers

OBSESSIVE COMPULSIVE DISORDER

Obsessive compulsive disorder (OCD) is a mental health condition where a person has obsessive thoughts and compulsive behaviors.
SYMPTOMS
•	Obsessive thoughts
Almost everyone has unpleasant or unwanted thoughts at some point, such as thinking they may have forgotten to lock the door of the house, or even sudden unwelcome violent or offensive mental images. But if you have a persistent, unpleasant thought that dominates your thinking to the extent it interrupts other thoughts, you may have an obsession.
•	Compulsive behavior

compulsions start as a way of trying to reduce or prevent anxiety caused by the obsessive thought, although in reality, this behavior is either excessive or not realistically connected.
For example, a person who fears contamination with germs may wash their hands repeatedly, or someone with a fear of harming their family may have the urge to repeat an action multiple times to neutralize the thought. Examples of compulsive behavior include counting, hoarding, asking for reassurance.

TREATEMENT
-focus groups
-seeking help
-medicine
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 9,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 179,
                'country_code' => 'ZW',
                'title' => "TYPES OF MENTAL ILLNESS 2",
                'description' => "INTRODUCTION
Types of mental illness usually depends on the cause and they can be treated in different ways. The types include and are not limited to bipolar disorder, schizophrenia, anxiety disorder, dementia, post traumatic disorder, clinical depression among others.

TYPES OF MENTAL ILLNESS
•	ANXIETY DISORDER
-	This is usually caused by difficulty experience in childhood, adolescence or adulthood. Going through stress and trauma when you are young triggers anxiety.
-	Symptoms of anxiety
* Sweating, trembling, exhaustion, increase in heart rate, feeling nervous and restless, insomnia, having the urge to avoid scenarios that triggers anxiety, panic attacks.
-  Types of anxiety
*Panic disorder
*Selective mutism
*Social phobia
* Substance induced anxiety disorder
*Anxiety disorder due to a medical condition
* Generalized anxiety disorder
-Prevention
*Get help early, stay active, avoid alcohol or drug use

•	BIPOLAR DISORDER
It is also known as manic depression. It is a mental health condition that causes extreme mood swings that include emotional mania and depression. Causes include, triggers, genetics and chemical imbalance in the brain.
-	Symptoms -change in mood behaviors, guilt, fatigue, weight gain and weight loss, depression, excess desire for sex, delusion, irritability, unwanted thought, loss of interest, insomnia, pressure of speech etc.
-	Types – Bipolar 1, bipolar 2, cyclothymic disorder, rapid cycling bipolar, seasonal pattern bipolar
-	Treatment – therapy (support group, family therapy and psychotherapy), medications (SSRIs, Anticonvulsant, Antipsychotic), palliative care (hospitalization).

•	SCHIZOPHRENIA
-Schizophrenia is a serious mental disorder in which people interpret reality abnormally. Schizophrenia may result in some combination of hallucinations, delusions, and extremely disordered thinking and behavior that impairs daily functioning, and can be disabling.
SYMPTOMS
•	Delusions. These are false beliefs that are not based in reality. For example, you think that you're being harmed or harassed; certain gestures or comments are directed at you; you have exceptional ability or fame; another person is in love with you; or a major catastrophe is about to occur. Delusions occur in most people with schizophrenia.
•	Hallucinations. These usually involve seeing or hearing things that don't exist. Yet for the person with schizophrenia, they have the full force and impact of a normal experience. Hallucinations can be in any of the senses, but hearing voices is the most common hallucination.
•	Disorganized thinking (speech). Disorganized thinking is inferred from disorganized speech. Effective communication can be impaired, and answers to questions may be partially or completely unrelated. Rarely, speech may include putting together meaningless words that can't be understood, sometimes known as word salad.
•	Extremely disorganized or abnormal motor behavior. This may show in a number of ways, from childlike silliness to unpredictable agitation. Behavior isn't focused on a goal, so it's hard to do tasks. Behavior can include resistance to instructions, inappropriate or bizarre posture, a complete lack of response, or useless and excessive movement

PLEASE NOTE TYPES OF MENTAL ILLNESS ARE NOT LIMITED TO THE ABOVE!!!
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 9,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 180,
                'country_code' => 'ZW',
                'title' => "SIGNS AND SYMPTOMS OF MENTAL ILLNESS",
                'description' => "INTRODUCTION:
Signs and symptoms of mental illness vary depending on the disorder circumstances. Mental illness symptoms can affect emotions, thoughts and behaviors. Mental illness causes detachment from reality or hallucination.

EXAMPLES OF SIGNS AND SYMPTOMS INCLUDE:
•	Feeling sad or down
-	as a result of loneliness, most individuals end up feeling low most of the times. Being sad or down is not only cause by loneliness but also unemployment, depression, gender-based violence/ intimate partner violence, childhood abuse to mention but a few.


•	Alcohol and drug abuse
-	whilst it may be a cause of mental illness, excessive alcohol consumption and drug use may also be a symptom of mental illness. Many unemployed youths and adults are now drinking to relieve stress brought by lack of employment. They assume that drinking and taking drugs will bring peace in their lives not knowing that they will be bringing more problems to themselves since drugs and alcohol abuse have their own side effects on human beings.

•	Delusions
-delusion is detachment from the reality. Most causes of delusion are drug abuse, stress or certain medications. They may include mood swings, act of confusion, irritable, anxious, aggressive. Mental disorders such as schizophrenia, bipolar disorder or delusional disorder causes delusions.



•	Suicidal thinking
-	A person suffering from mental illness ends up having suicidal thoughts. Youth and adults need to be empowered that suicide is not the way out.


•	Sex drives changes
-	The pleasure and cravings of sex comes from the mind. Usually when a person stressed, their sex drives changes. This may end up affecting relationships. For instance, males take time to cum when they are stressed and if they cum, their sperms will not be thick. This may make the female partner postulate that the male is practicing infidelity somewhere thus bringing war to the relationship.

•	Excessive anger, hostility or violence
-	People suffering from mental illness are usually the most short tempered, violent and angry people.



•	Withdrawal from friends
•	Tiredness
•	Confused thinking
PLEASE NOTE THE SIGNS AND SYMPTOMS ARE NOT LIMITED TO THE ABOVE!!!
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 9,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 181,
                'country_code' => 'ZW',
                'title' => "HOW TO PROMOTE MENTAL WELL-BEING",
                'description' => "INTRODUCTION
The promotion of mental well-being among youths and adults is very essential in order to eliminate effects or problems caused by lack of mental well-being. Benefits of good mental health include, a stronger ability to cope with life’s stressors, a positive self-image, healthier relationships, better productivity, higher quality of life, decrease in suicide linked with mental illness, strong immune system to mention but a few. Knowing that mental well-being is essential, one can postulate that it is fundamental to empower youths and adults on ways to promote mental well-being.

WAYS TO PROMOTE MENTAL WELL-BEING
•	Guidance of a professional
-seeking help from counselling and therapy promotes mental well-being. This usually works on matters which involves cases like drug and substance abuse, sexual harassment, gender-based violence, childhood unresolved issues.
•	Prioritizing rest and sleep on daily basis
-most people think that doing work all the time is fundamental for a person to be successful. However, over working leads to burnouts and sometimes may trigger mood changing behavior. Self-care is very essential in promoting mental well-being (e.g., going on vacation, sleeping, exercising, meditating, taking a walk etc.)
•	Increasing family time
-due to the rising of technology, nowadays its very rare for families to have quality time after work or school. Family members now spends most of their free time glued on their laptops, phone or iPad. A family member may be depressed or even face some difficulties and no one in the house will even notice. By increasing family time, it will become easy to notice if a member is stressed thus helping each other in finding ways to bring back peace in that member’s life.
•	Empowerment of women, including mentoring program
-women are usually the victims of different of abuse. Women are marginalized for many things such as economic opportunities, education, participation to mention but a few. Due to these disadvantages, it has been difficult for most women to deal with mental well-being. Mentoring programs can be done to empower women promoting their self-worth, helping them to self-actualize as well as how to cope in the patriarchal society.
•	Workplace mental health interventions
-doing workshops at work and schools empowering people with knowledge of causes of mental illness, effects as well as ways to promote mental well-being.
•	Support to children
-children needs to be supported especially on issues of education. We all have dreams and most of those dreams can only be obtained through education.
•	Making perpetrators of abuse pay for their sins
•	Drug abuse awareness

PLEASE NOTE THAT THE WAYS TO PROMOTE MENTAL WELL-BEING ARE NOT LIMITED TO THE ABOVE!!!!",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 9,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
            [
                'id' => 182,
                'country_code' => 'ZW',
                'title' => "CAUSES AND EFFECTS OF MENTAL ILLNESS",
                'description' => "INTRODUCTION
Mental illness is also known as mental health disorder. Mental health is the state of psychological well-being or the absence of mental illness. It may also be referred as the mental well-being of both the mind and soul. It is undisputable that many youths and adults are facing challenges on daily basis which are affecting their mental well-being. The statistics of people suffering from mental illness is increasing rapidly. Mental illness is caused by a number of factors and the effects are many as well.

CAUSES
•	CHILDHOOD ABUSE
While adverse childhood experiences like abuse, bullying and emotional neglect impact children in different ways, they all impact the brain and how it develops. These changes can be moderate to severe depending on the age at which abuse starts and the duration of abuse. Sometimes if these childhood abuse issues are not resolved, it will later affect the child’s performance at school due to anxiety, fear or even low self-esteem.
•	GENDER BASED VIOLENCE
Gender based violence comes in different forms but at the end it all leads to mental health disorder. Forms include physical, emotional, verbal, psychological abused. The common type of gender-based violence is physical abuse (e.g rape). The trauma of rape haunts individuals and it disturbed peace in their day to day lives.
•	DRUG AND ALCOHOL MISUSE
It is so sad that a greater percentage of youths is abusing drugs due to factors like peer pressure, unemployment, pleasure, loneliness to mention but a few. The type of mental illness caused by misuse of drugs may even lead to hallucinations, triggering of suicidal thoughts or even violence.
•	UNEMPLOYMENT
Unemployment has been a major trigger of mental health disorder among youths and adults. Due to the increase in cost of living especially in urban areas, it has become so difficult for people to sustain a living if they are not employed.

•	LONELINESS
Usually when a person is alone, they end up thinking deeply about their life challenges.
-	PLEASE NOTE THAT THE CAUSES ARE NOT LIMITED TO THE ABOVE!!!!!

EFFECTS
•	Depression
•	Suicidal thoughts
•	Anger
•	Fear
•	Sadness
•	Feelings of helplessness
•	Family conflicts
•	Social isolation
•	Poverty and homelessness
•	Heart diseases
•	Self-harm or harm others
•	Relationship difficulties
•	Missed work or school
•	Misuse of drugs
•	Unhappiness and decreased enjoyment of life
•	Weakened immune system
",
                'imageUrl' => "https://via.placeholder.com/400",
                'category_id' => 3,
                'author_id' => 9,
                'status' => 1,
                'created_at' => '2023-03-15 19:14:42',
                'updated_at' => '2023-03-15 19:14:42',
            ],
        ];
        foreach ($articles as $article) {
            Article::query()->firstOrCreate($article, $article);
        }
    }
}
