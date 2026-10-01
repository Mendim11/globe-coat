<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    // Define fillable fields
    protected $fillable = [
        'first_name',
        'last_name',
        'position',
        'email',
        'phone_number',
        'personal_details',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'business_growth',
        'money_management',
        'business_consulting',
        'team_work',
        'image',
    ];


    // Cast social_links to array
    protected $casts = [
        'social_links' => 'array', // Social media links stored as JSON
    ];
}
