<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
    public function news()
    {
        return $this->hasMany(News::class);
    }
    protected $fillable = [
        'name',   // Add this line to allow mass assignment of 'name'
        'order',
    ];
}
