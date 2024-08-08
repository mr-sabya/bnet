<?php

namespace Database\Seeders;

use App\Models\AboutPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $check = AboutPage::where('id', 1)->first();

        if (!$check) {
            AboutPage::create([
                'about_title' => 'We Provide Best Internet Connection World Wide',
                'about_text' => "Yes! You'll be able to use your T-Mobile Home Internet to connect your computer, phone, and numerous other devices. Gauge your students’ skill level with the initial test and follow their progress.",
                'about_image_1' => 'site/about_img01.jpg',
                'about_image_2' => 'site/about_img02.jpg',
                'counter_1' => 50,
                'counter_1_text' => 'Network Coverage Areas',
                'counter_2' => 25,
                'counter_2_text' => 'Happy Customers',
                'counter_3' => 23,
                'counter_3_text' => 'Experienced Employees',
                'counter_4' => 10,
                'counter_4_text' => 'Certificate & Awards Winner',

                'skill_section_heading' => "We've The Best Skilled & Experienced Team",
                'skill_section_text' => 'Gauge your students’ skill level with the initial test and follow their progress. Internet to connect your computer, phone, and numerous other devices.',
                'skill_section_image' => 'site/progress_img.png',
                'skill_section_video' => 'https://www.youtube.com/watch?v=XHOmBV4js_E',
            ]);
        }
    }
}
