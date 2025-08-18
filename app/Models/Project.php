<?php

namespace App\Models;

use App\Models\ProjectImage;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category',
        'start_date',
        'end_date',
        'featured_image',
        'slug',
        'status',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
