<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    protected $fillable = [
        'id', 'name', 'description'
    ];
    protected $table = 'event_category';

    public function getEventCategory($id)
    {
        return DB::table('event_category')->where('id', $id)->first();
    }
}