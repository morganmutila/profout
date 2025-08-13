<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Client extends Model
{
    protected $fillable = ['name', 'logo'];

    // Fetches the image from storage
    public function companyLogoUrl(): string
    {
        return Storage::url($this->logo);
    }
}
