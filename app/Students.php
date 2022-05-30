<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    //
    protected $fillable = [
        'fname',
        'lname',
        'dob',
        'pob',
        'sickness',
        'guardian',
        'address',
        'phone',
        'school',
        'subject',
        'email'
    ];
}
