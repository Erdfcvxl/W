<?php

namespace App\Modules\Park;

use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    public $sort_by_nearby;
    public $sort_by_reviews;
    public $sort_by_price;

    protected $fillable = [
        'id',
        'name',
        'city',
        'address',
        'working_hours',
        'website',
        'facebook_link',
        'latitude',
        'longitude'
    ];
    protected $table = 'parks';

    public function getPark($id) {
        return DB::table('parks')->where('id', $id)->first();
    }

    public function reservations() {
        return $this->hasMany('App\Reservation');
    }

    public function parkStaff() {
        return $this->belongsTo('App\ParkStaff');
    }
}
