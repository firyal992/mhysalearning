<?php

namespace Database\Seeders;

use App\Models\TutorDetail;
use Illuminate\Database\Seeder;

class TutorDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TutorDetail::create([
            'id' => 1,
            'user_id' => 4,
            'profile_pic' => 'erica-sanger.jpeg',
            'pengalaman_kerja' => 'Social Media Specialist for vemale.com',
            'skill' => 'Content',
            'link_linkedin' => 'https://www.linkedin.com/in/egsanger/',
            'link_ig' => 'https://www.instagram.com/egsanger/',
            'insta_un' => '@egsanger',
            'linkedin_un' => 'Erica S',
            'hal_menarik_dikelas' => 'Selipan Update Content Viral Terkini',
            'quote' => 'The best marketing doesn’t feel like marketing #SemuaPastiBisa.'
        ]);

        TutorDetail::create([
            'id' => 2,
            'user_id' => 5,
            'profile_pic' => 'intan-salamina.JPG',
            'pengalaman_kerja' => 'SEO/SEM Specialist for Maxsol',
            'skill' => 'Search Engine Optimization, Search Engine Marketing',
            'link_linkedin' => 'https://www.linkedin.com/in/intan-salamina/',
            'link_ig' => 'https://instagram.com/insalamina',
            'insta_un' => '@insalamina',
            'linkedin_un' => 'Intan Salamina',
            'hal_menarik_dikelas' => 'Interactive Quiz',
            'quote' => 'Nobody like ads, so create ads that dont look like an ads #SemuaPastiBisa.'
        ]);

        TutorDetail::create([
            'id' => 3,
            'user_id' => 6,
            'profile_pic' => 'felix-malvian.png',
            'pengalaman_kerja' => 'Excel Basic at IISE BINUS',
            'skill' => 'Python for Data Science, Communication, Leadership, Analytical Thinking',
            'link_linkedin' => 'https://www.linkedin.com/in/felix-malvian-3a499a152/',
            'link_ig' => 'https://www.instagram.com/felixmalvian/',
            'insta_un' => '@felixmalvian',
            'linkedin_un' => 'Felix Malvian',
            'hal_menarik_dikelas' => 'Kelas Interaktif antara pengajar dan peserta',
            'quote' => 'Ada Niat Ada Usaha Ada Hasil'
        ]);

        TutorDetail::create([
            'id' => 4,
            'user_id' => 7,
            'profile_pic' => 'demiro-ragilsyah.jpeg',
            'pengalaman_kerja' => 'Country Manager AIESEC in Belgia 2019',
            'skill' => 'Strategic Plan, Digital Marketing, Gen Z Marketing Strategy',
            'link_linkedin' => 'https://www.linkedin.com/in/demiro-ragil-syah-3b9375153/',
            'link_ig' => 'https://www.instagram.com/dems.blue/',
            'insta_un' => '@dems.blue',
            'linkedin_un' => 'Demiro Ragil Syah',
            'hal_menarik_dikelas' => 'SEO and SEM from Gen Z view and Platform management.',
            'quote' => 'LEADs everything through Optimization'
        ]);

        TutorDetail::create([
            'id' => 5,
            'user_id' => 8,
            'profile_pic' => 'mila-puspita.jpg',
            'pengalaman_kerja' => 'Freelancer Research Assistant',
            'skill' => 'Filing, Administration/Management, Microsoft Office',
            'link_linkedin' => 'https://www.linkedin.com/in/itsmila98/',
            'link_ig' => 'https://www.instagram.com/mila_puspita98/',
            'insta_un' => '@mila_puspita98',
            'linkedin_un' => 'Mila Puspita',
            'hal_menarik_dikelas' => 'Menciptakan kelas yang interaktif dan banyak praktek',
            'quote' => 'a good data visualization will make the right decisions #SemuaPastiBisa'
        ]);

        TutorDetail::create([
            'id' => 6,
            'user_id' => 9,
            'profile_pic' => 'hagie-deju.jpg',
            'pengalaman_kerja' => 'Marketing Management Trainee at Samsung Electronics',
            'skill' => 'Leadership, Data Strategic and Analytic, Professional Pitching, Campaign Management, Project Management, Digital Marketing, Social Media',
            'link_linkedin' => 'https://www.linkedin.com/in/hagie/',
            'link_ig' => 'https://www.instagram.com/ha___gie/',
            'insta_un' => '@ha___gie',
            'linkedin_un' => 'Hagie Deju Pangersa',
            'hal_menarik_dikelas' => 'Topics are relevant enough with the current demand & situation',
            'quote' => 'Social Media is the heart of our Digital Life Era. #SemuaPastiBisa'
        ]);

        TutorDetail::create([
            'id' => 7,
            'user_id' => 10,
            'profile_pic' => 'gerald-giovanni.jpeg',
            'pengalaman_kerja' => 'Marketing Brand Building at Unilever',
            'skill' => 'Presentation Skills, Public Speaking, Business Strategy and Analysis, ',
            'link_linkedin' => 'https://www.linkedin.com/in/geraldgiovannirg',
            'link_ig' => 'https://instagram.com/geraldrad',
            'insta_un' => '@geraldrad',
            'linkedin_un' => 'Gerald Giovanni Raditya Gita',
            'hal_menarik_dikelas' => 'I guess you know how to make a presentation, but do you know how to make a good presentation that can get your audience’s attention right from the start until the end you say thank you? That’s what I am trying to tell you here.',
            'quote' => 'Kamu bisa, kita bisa, #SemuaPastiBisa'
        ]);
    }
}
