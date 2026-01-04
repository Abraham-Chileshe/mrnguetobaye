<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'cover_image',
        'content',
        'additional_media',
        'is_published',
        'created_at',
    ];

    protected $casts = [
        'additional_media' => 'array',
        'is_published' => 'boolean',
    ];
}
