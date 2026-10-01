<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['page_id', 'page_ids', 'type', 'content'];
    protected $casts = [
        'page_ids' => 'array', // Automatically cast JSON to an array
    ];
    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }
    public function getContentAttribute($value)
    {
        return json_decode($value, true);
    }
    public function getPageIdsAttribute($value)
    {
        return json_decode($value, true);
    }

    // This function retrieves all pages related to this section.
    public function pages()
    {
        return $this->belongsToMany(Page::class, 'page_ids');
    }
}
