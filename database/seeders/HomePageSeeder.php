<?php

namespace Database\Seeders;

use App\Models\HomePage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $check = HomePage::where('id', 1)->first();

        if (!$check) {
            HomePage::create([
                'banner_heading' => 'Journey With Fast Internet',
                'banner_text' => 'Fast Speed + No Service Charge + No Contracts + Powerful Coverage',
                'banner_image' => 'site/banner_bg.jpg',
                'banner_package_price' => 525,

                #package section
                'package_section_heading' => "Let's Discover Our Best Packages",
                'package_section_text' => "We are the broadband internet service provider situated at New York City and on the other big reason pay more should is that they're too loyal.",

                #video section
                'video_section_heading' => 'Experience The Features Magic of Netfix',
                'video_section_text' => 'We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble.',
                'video_section_image' => 'site/video_bg.jpg',
                'video_section_video' => '',

                'counter_1' => 4,
                'counter_1_text' => 'Ultra HD Quality',
                'counter_2' => 90,
                'counter_2_text' => 'Online TV Channels',
                'counter_3' => 45,
                'counter_3_text' => 'Mbps Speed Internet',


                #service section
                'service_section_heading' => 'Find Perfect Network Solutions',

                #cta section
                'cta_section_heading' => 'Need Fast & Secure Broadband? Use Netfix & The Real Network',
                'cta_section_image' => 'site/cta_bg.jpg',

                #offer section
                'offer_section_heading' => 'Get Broadband Network At Very Cheap Price',
                'offer_section_text' => "Yes! You'll be able to use your T-Mobile Home Internet to connect your computer, phone, and numerous other devices. Gauge your students’ skill level with the initial test and follow their progress.",
                'offer_section_image' => 'site/offer_img.jpg',

                #top package section
                'top_section_heading' => 'Enjoy Sports Movies, TV Shows & More',
                'top_section_text' => "If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything hidden in the middle of text",
                'top_section_subtext' => '<span>Subscribe Netfix TV Box & Get</span> FREE Wi-Fi For 1 Month',
                'top_section_image' => 'site/subscribe_img.png',
            ]);
        }
    }
}
