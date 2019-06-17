<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class apiDb extends Model
{
    //
    protected $fillable = ['name', 'lname', 'dob', 'addr','phone'];
}
