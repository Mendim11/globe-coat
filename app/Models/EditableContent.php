<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditableContent extends Model
{
    use HasFactory;
    protected $table = 'editable_content';
    protected $fillable = ['page_name', 'section_name', 'type', 'content'];
}
