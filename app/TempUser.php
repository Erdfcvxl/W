<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempUser extends Model
{
    protected $fillable = [
        'name', 'surname', 'email', 'email', 'phone_number'
    ];
    protected $table = 'temp_user';
}