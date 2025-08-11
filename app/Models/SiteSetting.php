<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'phone',
        'phone_alt',
        'email',
        'hero_title',
        'hero_description',
        'about_info',
        'address',
    ];
}
