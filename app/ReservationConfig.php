<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationConfig extends Model
{
    protected $fillable = [
        'id', 'park_id', 'min_reservation', 'max_reservation', 'decline_time', 'open_time', 'close_time', 'upfront_percentage'
    ];
    protected $table = 'reservation_config';

    public function getParkReservationConfig($park_id) {
        return DB::table('reservation_config')->where('park_id', $park_id)->first();
    }

    public function getReservationConfig($id)
    {
        return DB::table('reservation_config')->where('id', $id)->first();
    }

    public function park() {
        return $this->belongsTo('App\Park');
    }
}