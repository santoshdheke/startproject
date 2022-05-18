<?php

namespace Module\Marketing\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Marketing extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'token',
        'token_verified',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
