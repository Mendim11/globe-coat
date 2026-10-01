<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    protected $fillable = [
        'label',
        'url',
        'is_visible',
        'order',
    ];

    // Define the relationship to Page
    public function page()
    {
        return $this->hasOne(Page::class, 'navbar_id');
    }
}
