<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkStaff extends Model
{
    protected $fillable = [
        'id', 'user_id', 'park_id'
    ];
    protected $table = 'park_staff';

    public function getPark() {
        return $this->hasOne('App\Park');
    }

    public function getUser() {
        return $this->hasOne('App\User');
    }
}
