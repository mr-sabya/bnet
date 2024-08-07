<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $check = Setting::where('id', 1)->first();

        if (!$check) {
            Setting::create([
                'site_title' => 'Netfix',
                'tagline' => 'Broadband & Internet Company in Khulna',
                'logo' => 'site/logo.png',
                'white_logo' => 'site/w_logo.png',
                'favicon' => 'site/favicon.png',
                'address' => '14/A, Queen Street City, New York, US',
                'email' => 'name@domain.com',
                'phone' => '+1 872 923 025',
                'opening_time' => '10 AM - 10 P',
                'facebook' => '#',
                'twitter' => '#',
                'instagram' => '#',
                'linkedin' => '#',
            ]);
        }
    }
}
