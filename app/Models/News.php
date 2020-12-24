<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'headline',
        'author',
        'source',
        'image',
        'description',

    ];

    public static function addNewsSubmit($image) {
        // $fileName = $image->getClientOriginalName();

        // auth()->news()->deleteOldImage();

        $image->storeAs('images', $image, 'public');


    }
}

