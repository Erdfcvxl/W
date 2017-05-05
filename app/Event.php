<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'park_id', 'event_category', 'name', 'description', 'date'
    ];
    protected $table = 'events';

    public function user() {
        return $this->belongsTo('App\User');
    }
}