<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $table = 'register';

    protected $fillable = [
        'name',
        'no',
        'address',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
