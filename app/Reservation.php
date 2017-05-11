<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reservation extends Model
{
    protected $fillable = [
        'user_id', 'temp_user_id', 'park_id','date', 'time', 'duration', 'status'
    ];
    protected $table = 'reservations';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tempUser()
    {
        return $this->belongsTo('App\TempUser');
    }

    public function getReservation($id)
    {
        return DB::table('reservations')->where('id', $id)->first();
    }


    public function getParkReservations($park_id)
    {
        return DB::table('reservations')
        ->join('users', 'reservations.user_id', '=', 'users.id')
        ->select('reservations.*', 'users.name', 'users.surname', 'users.phone_number')
        ->where('reservations.park_id', '=', $park_id)
        ->orderBy('start_time', 'asc')->get();
    }
}