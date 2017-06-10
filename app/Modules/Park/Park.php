<?php

namespace App\Modules\Park;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Park extends Model
{
    private $sort_by_nearby;
    private $sort_by_reviews;
    private $sort_by_price;

    protected $fillable = [
        'id',
        'name',
        'city',
        'address',
        'working_hours',
        'website',
        'facebook_link',
        'latitude',
        'longitude',
        'sort_by_nearby',
        'sort_by_reviews',
        'sort_by_price'
    ];
    protected $table = 'parks';

    public function objects()
    {
        return $this->hasMany('App\Modules\Object\Object');
    }

    public function reviews()
    {
        return $this->hasMany('App\Modules\Review\Review', 'park_id');
    }

    public function getPark($id) {
        return DB::table('parks')->where('id', $id)->first();
    }

    public function reservations() {
        return $this->hasMany('App\Reservation');
    }

    public function parkStaff() {
        return $this->belongsTo('App\ParkStaff');
    }

    public function getSortBy($var_name) {
        return (isset($this->$var_name))? $this->$var_name : null;
    }

    public function setSortBy($var_name) {
        $this->$var_name = 1;
    }
}
