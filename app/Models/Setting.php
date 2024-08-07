<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'site_title',
        'tagline',
        'logo',
        'white_logo',
        'favicon',
        'address',
        'email',
        'phone',
        'opening_time',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
    ];
}
