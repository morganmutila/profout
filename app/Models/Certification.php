<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = [
        'name',
        'issuer',
        'issued_at',
        'description',
        'certificate_file',
    ];

    protected $dates = ['issued_at'];

}