<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $skills = Skill::all();

        if ($skills->count() < 3) {
            Skill::create([
                'name' => 'Technical Skills',
                'skill' => 90,
            ]);

            Skill::create([
                'name' => 'Customer Support',
                'skill' => 80,
            ]);

            Skill::create([
                'name' => 'Networking SKills',
                'skill' => 95,
            ]);
        }
    }
}
