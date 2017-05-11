<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantCategory extends Model
{
    protected $fillable = [
        'id', 'name', 'description'
    ];
    protected $table = 'participant_category';

    public function getParticipantCategory($id)
    {
        return DB::table('participant_category')->where('id', $id)->first();
    }
}