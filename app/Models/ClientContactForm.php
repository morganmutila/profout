<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientContactForm extends Model
{
    protected $fillable = ['fullname', 'email', 'subject', 'message'];

    protected $table = 'client_contact_forms';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $hidden = ['created_at', 'updated_at'];

}
