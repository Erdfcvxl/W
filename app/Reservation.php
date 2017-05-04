<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reservation extends Model
{
    protected $fillable = [
        'user_id', 'temp_user_id', 'park_id', 'start_time', 'duration', 'status'
    ];
    protected $table = 'reservations';

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function getParkReservations($park_id) {
        $table = DB::table('reservations')
        ->join('users', 'reservations.user_id', '=', 'users.id')
        ->select('reservations.*', 'users.name', 'users.surname', 'users.phone_number')
        ->where('reservations.park_id', '=', $park_id)
        ->orderBy('start_time', 'asc')->get();
        return $table;
    }

    public function getReservationById ($id) {
        $reservation = Reservation::find($id);
        return $reservation;
    }

    public function createReservation ($park_id, $user_id, $start_time, $duration, $status) {
        $reservation = new Reservation([
            'park_id' => $park_id,
            'user_id' => $user_id,
            'start_time' => $start_time,
            'duration' => $duration,
            'status' => $status
        ]);
        $reservation->save();
    }

    public function deleteReservation ($id) {
        Reservation::where('id', '=', $id)
            ->delete();
    }

    public function editReservationTime ($id, $start_time, $duration) {
        Reservation::where('id', '=', $id)
            ->update(['start_time' => $start_time, 'duration' => $duration]);
    }
}