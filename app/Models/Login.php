<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    use HasFactory;

    protected $table = 'login';

    protected $fillable = [
        'name',
        'username',
        'password',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'password',
        'created_at',
        'updated_at',
    ];
}
