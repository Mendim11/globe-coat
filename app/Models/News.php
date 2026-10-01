<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'author',
        'status',
        'thumbnail_image',
        'project_images',
    ];

    protected $casts = [
        'project_images' => 'array', // Cast project_images as an array
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

