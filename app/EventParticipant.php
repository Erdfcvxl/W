<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventParticipant extends Model
{
    protected $fillable = [
        'user_id', 'participant_category'
    ];
    protected $table = 'event_participants';

    public function user() {
        return $this->hasMany('App\User');
    }
}