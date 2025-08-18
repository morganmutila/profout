<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $fillable = ['project_id', 'image_path'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    
}
