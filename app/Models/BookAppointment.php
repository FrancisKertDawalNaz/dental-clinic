<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookAppointment extends Model
{
    protected $fillable = ['date', 'time', 'service', 'notes'];
}
