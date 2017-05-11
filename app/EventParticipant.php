<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventParticipant extends Model
{
    protected $fillable = [
        'id', 'user_id', 'participant_category'
    ];
    protected $table = 'event_participants';

    public function user() {
        return $this->hasMany('App\User');
    }

    public function participantCategory() {
        return $this->hasMany('App\ParticipantCategory');
    }

    public function getEventParticipant($id)
    {
        return DB::table('event_participant')->where('id', $id)->first();
    }
}