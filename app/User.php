<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email', 'password','name', 'surname', 'phone_number'
    ];
    protected $table = 'users';

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getReservations() {
        return $this->hasMany('App\Reservation');
    }

    public function getParkStaff() {
        return $this->hasOne('App\ParkStaff');
    }
}
