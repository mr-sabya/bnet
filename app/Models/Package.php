<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'bandwidth',
        'price',
        'feature_1',
        'feature_2',
        'feature_3',
        'feature_4',
        'feature_5',
        'feature_6',
        'feature_7'
    ];
}
