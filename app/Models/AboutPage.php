<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'about_title',
        'about_text',
        'about_image_1',
        'about_image_2',

        'counter_1',
        'counter_1_text',
        'counter_2',
        'counter_2_text',
        'counter_3',
        'counter_3_text',
        'counter_4',
        'counter_4_text',
        
        'skill_section_heading',
        'skill_section_text',
        'skill_section_image',
        'skill_section_vide',
    ];
}
