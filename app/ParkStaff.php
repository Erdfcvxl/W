<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkStaff extends Model
{
    protected $fillable = [
        'id', 'user_id', 'park_id'
    ];
    protected $table = 'park_staff';

    public function park() {
        return $this->hasOne('App\Park');
    }

    public function user() {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
