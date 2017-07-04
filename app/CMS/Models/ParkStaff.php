<?php

namespace App\CMS\Models;

use Illuminate\Database\Eloquent\Model;

class ParkStaff extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'park_id'
    ];
    protected $table = 'park_staff';
}
