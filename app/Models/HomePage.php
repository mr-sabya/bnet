<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'banner_heading',
        'banner_text',
        'banner_image',
        'banner_package_price',

        'package_section_heading',
        'package_section_text',

        'video_section_heading',
        'video_section_text',
        'video_section_image',
        'video_section_video',


        'service_section_heading',

        'cta_section_heading',
        'cta_section_image',

        'offer_section_heading',
        'offer_section_text',
        'offer_section_image',

        'top_section_heading',
        'top_section_text',
        'top_section_subtext',
        'top_section_image',
    ];
}
