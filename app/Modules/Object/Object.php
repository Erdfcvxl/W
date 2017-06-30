<?php

namespace App\Modules\Object;

use Illuminate\Database\Eloquent\Model;

class Object extends Model
{
    protected $fillable = [
        'id',
        'park_id',
        'gallery_id',
        'name',
        'description',
    ];
    protected $table = 'parks';

    public function park()
    {
        return $this->belongsTo('App\Modules\Park\ParksPricing');
    }

    public function reviews()
    {
        return $this->belongsToMany('App\Modules\Review\ReviewObject');
    }
}

