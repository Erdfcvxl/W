<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'id', 'user_id', 'temp_user_id', 'reservation_id', 'park_id', 'amount', 'status'
    ];
    protected $table = 'payment';

    public function getPayment($id) {
        return DB::table('payment')->where('id', $id)->first();
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function tempUser() {
        return $this->belongsTo('App\TempUser');
    }

    public function reservation() {
        return $this->belongsTo('App\Reservation');
    }

    public function park() {
        return $this->belongsTo('App\Park');
    }
}