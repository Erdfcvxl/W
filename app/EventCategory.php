<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    protected $fillable = [
        'name', 'description'
    ];
    protected $table = 'event_category';
}