<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationConfig extends Model
{
    protected $fillable = [
        'park_id', 'min_reservation', 'max_reservation', 'decline_time', 'open_time', 'close_time', 'upfront_percentage'
    ];
    protected $table = 'reservation_config';

    public function park() {
        return $this->belongsTo('App\Park');
    }
}