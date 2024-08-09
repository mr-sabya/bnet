<?php

namespace Database\Seeders;

use App\Models\AboutList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $lists = AboutList::all();
        if($lists->count() < 6){
            AboutList::create([
                'name' => 'Expert technical team',
            ]);
            AboutList::create([
                'name' => 'Best network',
            ]);
            AboutList::create([
                'name' => '50+ coverage areas',
            ]);
            AboutList::create([
                'name' => '24/7 quick support',
            ]);
            AboutList::create([
                'name' => 'Reasonable price packages',
            ]);
            AboutList::create([
                'name' => 'Trusted & recommended',
            ]);
        }
    }
}
