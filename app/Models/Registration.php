<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'name', 'email', 'password', // Add other columns here
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
