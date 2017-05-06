<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'id', 'park_id', 'user_id', 'object_id', 'value', 'description'
    ];
    protected $table = 'reviews';
}