<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'thumbnail_image',
        'product_images',
        'additional_information',
    ];

    protected function casts(): array
    {
        return [
            'product_images' => 'array',
            'additional_information' => 'array',
        ];
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function getThumbnailUrlAttribute(): string
    {
        return $this->thumbnail_image
            ? Storage::disk('public')->url($this->thumbnail_image)
            : asset('frontend/img/logo/logo.png');
    }
}
