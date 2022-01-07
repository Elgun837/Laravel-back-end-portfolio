<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'abouts';
    protected $fillable = [
        'page_subtitle',
        'about_title',
        'about_subtitle',
        'about_image',
        'about_description',
        'about_backgorund_image',
    ];
}
