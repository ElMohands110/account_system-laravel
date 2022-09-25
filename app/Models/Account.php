<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';

    protected $fillable = [
        'account_name',
        'account_type',
        'account_code',
        'email',
        'phone',
        'tel',
        'fax',
        'address',
        'website',
        'invoice',
        'balance',
        'father_name',
        'main_account',
    ];

    public $timestamps = false;
}
