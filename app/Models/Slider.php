<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'sliders';
    protected $fillable = [
        'slide_image',
        'title',
        'subtitle',
        'description',
        'button',
        'button_link',
    ];
}
