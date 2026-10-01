<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Page extends Model
{
    use HasFactory;
    protected $content;
    protected $fillable = [
        'navbar_id',
        'title',
        'slug',
        'content',
        'section_one_service_1_title',
        'section_one_service_1_content',
        'section_one_service_2_title',
        'section_one_service_2_content',
        'section_one_service_3_title',
        'section_one_service_3_content',
        'how_it_works_title',
        'how_it_works_content',
    ];

    public function navbar()
    {
        return $this->belongsTo(Navbar::class);
    }
    public function sections()
    {
        return $this->hasMany(Section::class, 'page_id');
    }
}