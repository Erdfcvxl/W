<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email', 'password','name', 'surname', 'phone_number', 'park_id'
    ];
    protected $table = 'users';

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getReservations() {
        return $this->hasMany('App\Reservation');
    }

    public function getParkID($id) {
        return DB::table('park_staff')->where('user_id', '=', $id)->value('park_id');
    }

    public function getParkStaff() {
        return $this->hasOne('App\ParkStaff');
    }
}
