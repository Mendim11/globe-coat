<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'project_images',
        'author',
        'status',
        'category_id',
    ];
    protected $casts = [
        'project_images' => 'array', 
    ];
   public function categories()
{
    return $this->belongsToMany(Category::class, 'blog_category', 'blog_id', 'category_id');
}
}
