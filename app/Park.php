<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    protected $fillable = [
        'name','address', 'working_hours', 'website', 'facebook_link', 'latitude', 'longitude'
    ];
    protected $table = 'parks';

    public function getReservations() {
        return $this->hasMany('App\Reservation');
    }

    public function getParkStaff() {
        return $this->belongsTo('App\ParkStaff');
    }
}