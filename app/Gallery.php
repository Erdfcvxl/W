<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'parent_type', 'parent_idea', 'media_path', 'media_type'
    ];
    protected $table = 'gallery';
}