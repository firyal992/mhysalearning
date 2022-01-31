<?php

namespace Database\Seeders;

use App\Models\course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        course::create([
            'id' => 1,
            'category_id' => 2,
            'tutor_detail_id' => 1,
            'nm_course' => 'Introduction To Digital Marketing',
            'class_summary' => 'Pengenalan ke dasar digital marketing; Perbedaan digital marketing dengan offline marketing; Metode dan strategi marketing (sales funnel, goal); Menentukan Target Pemasaran; Pengukuran keberhasilan pemasaran',
            'slug' => 'introduction-digimar',
            'jam'=> '19.00 WIB',
            'tanggal' => '21/08/2021',
            'harga' => 19000,
            'is_bundle' => 0
        ]);
        course::create([
            'id' => 2,
            'category_id' => 2,
            'tutor_detail_id' => 2,
            'nm_course' => 'Digital Advertisements (Ads)',
            'class_summary' => '- Overview Digital Ads; Intro to FB ads; Ads Structure; Budgeting',
            'slug' => 'digimar-ads',
            'jam'=> '19.00 WIB',
            'tanggal' => '17/09/2021',
            'harga' => 19000,
            'is_bundle' => 0
        ]);

        course::create([
            'id' => 3,
            'category_id' => 3,
            'tutor_detail_id' => 3,
            'nm_course' => 'MS. Office: EXCEL 1',
            'class_summary' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, dignissimos ipsum? Provident aspernatur natus tenetur dolorem beatae explicabo, eius debitis vero ad itaque repellat aut sapiente adipisci. Architecto voluptas consectetur, libero cum culpa incidunt dignissimos ducimus illum modi. Vel eveniet atque alias voluptate, maxime earum tenetur iusto. Incidunt ea ducimus ex voluptatum vel laboriosam nemo similique eos, libero nesciunt eius ad iure corrupti minima saepe illum sit tempore dolorum accusamus hic iusto suscipit eum sapiente eveniet. Est, aut? Non dolor quasi laboriosam dolorem doloribus sequi quisquam atque sit expedita alias ut sapiente perferendis, minus ex corporis earum, et consequuntur fugit.',
            'slug' => 'ms-office-excel-1',
            'jam'=> '19.00 WIB',
            'tanggal' => '03/09/2021',
            'harga' => 19000,
            'is_bundle' => 0
        ]);
        course::create([
            'id' => 4,
            'category_id' => 2,
            'tutor_detail_id' => 4,
            'nm_course' => 'Optimalization',
            'class_summary' => 'Digital marketing ecosystem; Focusing on customer pathway; Optimize your product on search engine; Create a seamless customer experience',
            'slug' => 'digimar-optimalization',
            'jam'=> '19.00 WIB',
            'tanggal' => '03/09/2021',
            'harga' => 19000,
            'is_bundle' => 0
        ]);

        course::create([
            'id' => 5,
            'category_id' => 3,
            'tutor_detail_id' => 5,
            'nm_course' => 'MS. Office: EXCEL 2',
            'class_summary' => '- Belajar untuk memahami visualisasi Data; Membuat Tabel yang efektif; Membuat chart/graph yang baik; Mengetahui tips dan trik dalam pembuatan chart yang baik; Mengetahui fungsi chart',
            'slug' => 'ms-office-excel-2',
            'jam'=> '19.30 WIB',
            'tanggal' => '06/09/2021',
            'harga' => 19000,
            'is_bundle' => 0
        ]);
        course::create([
            'id' => 6,
            'category_id' => 2,
            'tutor_detail_id' => 6,
            'nm_course' => 'Digital Marketing Platform',
            'class_summary' => 'Social Media Marketing; Email Marketing',
            'slug' => 'digimar-platform',
            'jam'=> '19.30 WIB',
            'tanggal' => '06/09/2021',
            'harga' => 19000,
            'is_bundle' => 0
        ]);
        course::create([
            'id' => 7,
            'category_id' => 3,
            'tutor_detail_id' => 7,
            'nm_course' => 'MS. Office: Powerpoint',
            'class_summary' => 'How to master essential presentation tools; How to create a visually appealing presentation; How to convey your message to your audience; How to deliver your presentation; How about you ask me anything you want to know about Presentation here?',
            'slug' => 'ma-office-powerpoint',
            'jam'=> '19.00 WIB',
            'tanggal' => '21/08/2021',
            'harga' => 19000,
            'is_bundle' => 0
        ]);

        course::create([
            'id' => 8,
            'category_id' => 2,
            'nm_course' => 'Introduction To Digital Marketing, Optimalization, Digital Marketing Platform, Digital Advertisements (Ads)',
            'class_summary' => 'Class Summary and the names of the available tutors are no different from the single class, only by buying this bundle class you will get other benefits that are not available in the single class, namely bla bla bla bla',
            'slug' => 'digimar-bundle',
            'tanggal' => '21/08/2021 - 17/09/2021',
            'harga' => 70000,
            'is_bundle' => 1
        ]);
        course::create([
            'id' => 9,
            'category_id' => 3,
            'nm_course' => 'MS. Office: Powerpoint, EXCEL 2, EXCEL 2',
            'class_summary' => 'Class Summary and the names of the available tutors are no different from the single class, only by buying this bundle class you will get other benefits that are not available in the single class, namely bla bla bla bla',
            'slug' => 'ms-office-bundle',
            'tanggal' => '21/08/2021 - 06/09/2021',
            'harga' => 70000,
            'is_bundle' => 1
        ]);
        
    }
}
