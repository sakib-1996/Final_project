<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'sliders';

    protected $fillable = [
        'image_1',
        'image_2',
        'image_3',
        'image_4',
    ];
}
