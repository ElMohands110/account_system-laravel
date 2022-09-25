<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeedOfArrest extends Model
{
    use HasFactory;

    protected $table = 'deed_of_arrest';

    protected $fillable = [
        'account_name',
        'account_code',
        'description',
        'credit',
        'debit',
        'to_account_name',
        'to_account_code',
        'to_description',
        'to_credit',
        'to_debit',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
