<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'park_id', 'event_category', 'name', 'description', 'date'
    ];
    protected $table = 'events';

    public function getParkEvents($park_id)
    {
        return DB::table('events')->where('park_id', '=', $park_id)->get();
    }

    public function getEvent($id)
    {
        DB::table('events')->where('id', '=', $id)->first();
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}